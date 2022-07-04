<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class CertifController extends Controller
{
    public function index(){

        return view('certif.index');

    }

    public function new(Request $request){
   $request ->validate([
            'full_name' => 'required',
            'cine' => 'required',
            'birthday' => 'required',
            'title' => 'required',
            'depart' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'address' => 'required',
            'durer' => 'required'
        ]);
        DB::table('employe')->delete();
        $query = DB::table('employe')->insert([
                'full_name' =>$request->input('full_name'),
                'cine' =>$request->input('cine'),
                'birthday' =>$request->input('birthday'),
                'title' =>$request->input('title'),
                'depart' =>$request->input('depart'),
                'start_date' =>$request->input('start_date'),
                'end_date' =>$request->input('end_date'),
                'address' =>$request->input('address'),
                'durer' =>$request->input('durer'),
        ]);
if($query){
    $signature = DB::select('select * from signatures');
    $company = DB::select('select * from company' );
    $employe = DB::select('select * from employe');
    return view('certif.show',['employe'=>$employe,'company'=>$company , 'signature'=>$signature])->with('success', 'Employe details been saved');
          }
            else{
    return back()->with('fail','to save employee details');
                }



    }

    public function show(){
        $signature = DB::select('select * from signatures ');
        $company = DB::select('select * from company' );
        $employe = DB::select('select * from employe');
        return view('certif.show',['employe'=>$employe,  'company'=>$company , 'signature'=>$signature]);


    }
    public function print(){
        $signature = DB::select('select * from signatures');
        $company = DB::select('select * from company' );
        $employe = DB::select('select * from employe');

        $pdf = PDF::loadView('certif.print',['employe'=>$employe,  'company'=>$company , 'signature'=>$signature]);

        return $pdf->download('Formation Certificate.pdf');




    }


}
