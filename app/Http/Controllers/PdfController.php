<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
       
        return view('downloads.index');
    }


    public function downloadstage(){

$path = public_path('pdf/Att-Stage.pdf');
return response()->download($path);

    }
    public function downloadwork(){

        $path = public_path('pdf/Att-Work.pdf');
        return response()->download($path);
        
            }

}
