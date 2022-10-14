<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;


class customersController extends Controller
{
    public function index()
    { 
        $customers = customer::where('type','User')->get(); //select * from customers
        return view('customers.viewCustomers')->with('customers',$customers);
    }

    public function show($id)
    {
        $data = customer::find($id);
        return view('customers.viewCustomers')->with('date',$data);
    }

    public function destroy($id)
    {
        $cusromers = customer::find($id);
        Mail::to($cusromers->email)->send(new sendMail());
        //$cusromers->delete();
        customer::destroy($id);
        return redirect('viewCustomers')
        ->with('flash_message', 'Customerblocked and an EMAIL has sent!');
    }
    public function search(Request $request){
        $get_name =$request-> searchCustomer;
        $customers = customer::where('name','LIKE','%'.$get_name.'%')->get();
        return view('customers.searchCustomer',compact('customers'));
    }
}
