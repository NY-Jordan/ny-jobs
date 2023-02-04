<?php

namespace App\Http\Controllers;

/* use Barryvdh\DomPDF\PDF;
 */use App\Models\Curriculum;
 use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Services\AppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CurriculumController extends Controller
{

    

    /**
     * saveCv function
     * save a Curriculum
     * @param Request $request
     * @return void
     */
    public function saveCv(Request $request)
    {
        $request->validate([
            'name' => "required",
            'profession' => "required",
            'experience' => "required",
            'cv' => "required",
        ]);
        try {
            $path = AppService::saveFile($request->name, $request->file("cv"), "cv");
            if ($path) {
                Curriculum::create([
                    'name' => $request->name,
                    'experience' => $request->experience,
                    'profession_id' => 1,
                    'path' => $path
                ]);
            } else 
                return back()->with('message', 'error, refresh and try again');           
            return back()->with('message', 'you cv successfully save');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('message', 'error, refresh and try again');
        }
    }


    public function load($id)
    {
        $cv = Curriculum::find($id);
        $pdf = PDF::loadFile("H:\\travaux\Onacc\ONACC\public\storage\cv\cv Nghokeng Daniel201317.pdf");
        return $pdf->stream();
    }
}
