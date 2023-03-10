<?php

namespace App\Http\Controllers;

/* use Barryvdh\DomPDF\PDF;
 */

use App\Models\Curriculum;
use Spatie\PdfToImage\Pdf as SpatiePdf;
use App\Services\AppService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
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
            $full_path = public_path("storage/".$path);
            $pdf = new SpatiePdf($full_path);
            $pdf->getNumberOfPages();
            $path_image = "/cv/images/$request->name.png";
            $pdf->saveImage(public_path().'/storage'.$path_image);

            if ($path) {
                Curriculum::create([
                    'name' => $request->name,
                    'experience' => $request->experience,
                    'profession_id' => $request->profession,
                    'path' => $path,
                    'image_path' => $path_image
                ]);
            } else
                return back()->with('message', 'error, refresh and try again');
            return back()->with('message', 'you cv successfully save');
        } catch (\Throwable $th) {
            dd($th);
            return back()->with('message', 'error, refresh and try again');
        }
    }


    /**
     * load function
     * load CV on view
     *
     * @param [type] $id
     * @return void
     */
    public function load($id)
    {
        $cv = Curriculum::find($id);
        $pdf = PDF::loadFile(public_path(Storage::url($cv->path)));
        PDF::setOptions([
            "defaultFont" => "Courier",
            "defaultPaperSize" => "a4",
            "dpi" => 130
        ]);
        return $pdf->stream();
    }


    
}
