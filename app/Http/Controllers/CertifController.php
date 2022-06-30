<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertifController extends Controller
{
    public function index(){

        return view('certif.index');

    }

    public function new(Request $request){
        $request ->validate([
            'full_name' => 'required',
            'cine' => 'required',
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        DB::table('employe')->delete();
        $query = DB::table('employe')->insert([
                'full_name' =>$request->input('full_name'),
                'cine' =>$request->input('cine'),
                'title' =>$request->input('title'),
                'start_date' =>$request->input('start_date'),
                'end_date' =>$request->input('end_date'),

        ]);
if($query){
    return back()->with('success', 'Employe details been saved');
          }
            else{
    return back()->with('fail','to save employee details');
                }
    }

    public function show(){
        $company = DB::select('select * from company' );
        $employe = DB::select('select * from employe');
        return view('certif.show',['employe'=>$employe, 'company'=>$company]);

        // return view('certif.show', compact('company'));
    }

}
