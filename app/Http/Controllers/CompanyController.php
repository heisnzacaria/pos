<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'rc' => $request->rc,
            'patent' => $request->patent,
            'if' => $request->if,
            'ice' => $request->ice,
            'phone' => $request->phone,
            'address' => $request->address,

        );
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
        return view('company.show',['company'=>$company]);

    }
}
