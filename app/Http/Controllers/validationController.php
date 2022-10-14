<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer; 
use Illuminate\Support\Facades\Auth;


class validationController extends Controller
{
    function loginValidation(Request $rqst){
        $this -> validate($rqst, [
            "email" =>"required|email|exists:customers,email",
            "password" => "required|min:8|exists:customers,password"
        ]);
        
        $usr = new customer();
        $usr-> email = $rqst->email;
        $usr-> password = $rqst->password;
        $user=customer::where('email', $rqst->email)
                       ->where('password',$rqst -> password )->first();
        if ($user == null){
            return "user not found";
        }
        if ($usr->email == $user->email){
            if ($usr->password == $user->password){
                if ($user -> type =="Admin"){
                    session()->flash('logged','Logged in as '.$user->email);
                    return redirect()->route('adminDashboard'); 
                }
                else {
                     //session()->put('logged',$user->email);
                    //session()->flash('notLogged','user not valid');
                    return redirect()->route('customersDashboard');
                }
            
            }
            else {
                return "User invalid";
            }
        }
        else 
         return "Email Invalid";
  
    }
    function registerValidation(Request $rqt){
        $this -> validate($rqt, [
            "name" => "required|regex:/^[a-zA-Z\s]*$/i",
            "email" =>"required|email|unique:customers,email", // for unique email which is not already in database
            "password" => "required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$#!%*?&])[A-Za-z\d@$#!%*?&]{8,}$/i",
            "conf_password" => "required|same:password",
            "type"=> "required",
            "gender" =>"required"
        ]);

        $obj = new customer();
        $obj ->name = $rqt->name;
        $obj ->email = $rqt->email;
        $obj ->password = $rqt->password;
        $obj ->type = $rqt->type;
        
        $obj -> save();
        if($obj){
            //return view ('commonFeature.customersDashboard');
            return back()->with('msg','Registration successful!Please login.');
        }
        else
           return back()->with('msgFail','Unfortunately your registration failed');
        
        //return redirect()->route('welcomepage');
    }

    //function __construct(){
       // $this->middleware('logged');
    //}
    /*
    protected function authenticated(){

        if(Auth::customer()->type =='Admin') 
        { 
            return redirect()->route('adminDashboard');
        } 
        elseif(Auth::customer()->type =='User')
        {
            return redirect()->route('customersDashboard')->with('status','Welcome');
        }
        else
        {
            return redirect()->route('/');
        }

    }
    */
    
}
