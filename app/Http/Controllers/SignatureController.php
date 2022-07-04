<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Signature;

class SignatureController extends Controller
{
    public function index()
    {
        return view('signature.signature-pad');
    }

    public function store(Request $request)
    {
        DB::table('signatures')
        ->where('name','admin')
        ->delete();


        $folderPath = "images/"; //path location

        $image_parts = explode(";base64,",$request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $uniqid = uniqid();
        $file = $folderPath . $uniqid . '.'.$image_type;
        file_put_contents($file, $image_base64);



        $save = new Signature;
        $save->name = 'admin';
        $save->signature = $file;
        $save->save();


        return back()->with('success', 'Form successfully submitted with signature');
    }

}
