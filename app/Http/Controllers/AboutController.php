<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }


    //funcionar para descargar mi cv en pdf
    public function download()
    {
        $file = public_path()."/docs/cv.pdf";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'cv-cesarzavala.pdf', $headers);
    }

}
