<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\medicine;
use App\Models\editsupplier;
use App\Models\info;
use App\Models\pic;


class pagesController extends Controller
{
    public function welcomepage()
    {
        return view('commonFeature.welcomepage');
    }
    function login(){
        return view('commonFeature.login');
    }
    function register(){
        return view('commonFeature.register');
    }
    function adminDashboard(Request $request){

        //$user = customer::where('email',session()->get('logged'))->first();
        //$infos = [];
        $infos = info::all();
        $medicines = medicine::count();
        $supplier  = editsupplier::count();
        $customers = customer::where('type','User')->count();
        $medQuantity = medicine::where('quantity')->count();
        //$customers = customer::where('customerId',session()->get('logged'))->first();
         return view('commonFeature.adminDashboard', compact('medicines','customers','supplier','medQuantity','infos'));
     }
     function editInfo($id)
     {
        $infos = info::find($id);
        return view('commonFeature.editInfo',compact('infos'));
     }
     function updateInfo(Request $request,$id){
        $infos = info::find($id);
        $infos-> name = $request->name;
        $infos-> gender = $request->gender;
        $infos-> dob = $request->dob;
        $infos-> bloodGroup = $request->bloodGroup;
        $infos-> address = $request->address;
        $infos-> update();
        return redirect()->route('adminDashboard');
    }

     function logout(){

        session()->forget('logged');
        return redirect('login');
     }
 
     function customersdashboard(){
         $cusromers = [];
         
         $customers = customer::all(); //select * from customers
         return view('commonFeature.customersDashboard')->with('customers',$customers);
     }
     function dashboard(){
        return view('commonFeature.dashboard');
     }

}




