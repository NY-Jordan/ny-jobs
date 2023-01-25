<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Services\AppService;
use Illuminate\Http\Request;

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
            $path = AppService::saveFile($request->name, $request->file("cv"));
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
}
