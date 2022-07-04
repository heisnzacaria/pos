<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class CompanyController extends Controller
{
    public function index(){

        $company = DB::select('select * from company');
        return view('company.index',['company'=>$company]);

    }

    public function update(Request $request){

       $id = 1;


        $data = array(
            'name' => $request->name,
            'responsable' => $request->responsable,
            'rc' => $request->rc,
            'patent' => $request->patent,
            'if' => $request->if,
            'ice' => $request->ice,
            'phone' => $request->phone,
            'address' => $request->address,
            'ville' => $request->ville,

);



// $image_64 = $data['signed']; //your base64 encoded data

//   $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf

//   $replace = substr($image_64, 0, strpos($image_64, ',')+1);

// // find substring fro replace here eg: data:image/png;base64,

//  $image = str_replace($replace, 'data:image/png;base64', $image_64);

//  $image = str_replace(' ', '+', $image);

//  $imageName = Str::random(10).'.'.$extension;

//  Storage::disk('public')->put($imageName, base64_decode($image));



$result = DB::table('company')->updateOrInsert(['id'=> $id],$data);
$company =  DB::select('select * from company where id = 1');

if($result){
    return back()->with('success', 'Company details has been updated');
          }
            else{
    return back()->with('fail','Failed to save company details');
                }
    }

    public function show(){
        $company = DB::select('select * from company');
        $signature =  DB::select('select * from signatures');
        return view('company.show',['company'=>$company , 'signature'=>$signature]);



    }
}
