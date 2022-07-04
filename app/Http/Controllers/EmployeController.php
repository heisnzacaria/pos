<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class EmployeController extends Controller
{
    public function index(){

        return view('crud.index');

    }

    public function index2(){

        return view('crud.index2');

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
                'end_date' =>$request->input('start_date'),
                'address' =>$request->input('address'),
                'durer' =>$request->input('durer'),



        ]);
if($query){
    $signature =  DB::select('select * from signatures');
    $company = DB::select('select * from company' );
    $employe = DB::select('select * from employe');
    return view('crud.show',['employe'=>$employe, 'company'=>$company , 'signature'=>$signature])->with('success', 'Employe details been saved');
          }
            else{
    return back()->with('fail','to save employee details');
                }
    }



    public function new2(Request $request){
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
                'end_date' =>$request->input('start_date'),
                'address' =>$request->input('address'),
                'durer' =>$request->input('durer'),



        ]);
if($query){
    $signature =  DB::select('select * from signatures');
    $company = DB::select('select * from company' );
    $employe = DB::select('select * from employe');
    return view('crud.show2',['employe'=>$employe, 'company'=>$company , 'signature'=>$signature])->with('success', 'Employe details been saved');
          }
            else{
    return back()->with('fail','to save employee details');
                }
    }
























    public function show(){
        $signature =  DB::select('select * from signatures');
        $employe = DB::select('select * from employe');
        $company = DB::select('select * from company' );
        return view('crud.show',['employe'=>$employe, 'company'=>$company , 'signature'=>$signature]);

    }

    public function show2(){
        $signature =  DB::select('select * from signatures');
        $employe = DB::select('select * from employe');
        $company = DB::select('select * from company' );
        return view('crud.show2',['employe'=>$employe, 'company'=>$company , 'signature'=>$signature]);

    }


    public function print(){

        $company = DB::select('select * from company' );
        $employe = DB::select('select * from employe');
        $signature =  DB::select('select * from signatures');


        $pdf = PDF::loadView('crud.print',['employe'=>$employe, 'company'=>$company , 'signature'=>$signature]);

        return $pdf->download('Digital Work Certificate.pdf');
}

public function print2(){

    $company = DB::select('select * from company' );
    $employe = DB::select('select * from employe');
    $signature =  DB::select('select * from signatures');


    $pdf = PDF::loadView('crud.print2',['employe'=>$employe, 'company'=>$company , 'signature'=>$signature]);

    return $pdf->download('Digital Work Certificate.pdf');
}



}
