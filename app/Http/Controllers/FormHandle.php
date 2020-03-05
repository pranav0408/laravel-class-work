<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormHandle extends Controller
{
    public function index(Request $req ){
        
        $fname = $req->input("fname");
        $lname = $req->input("lname");
        $email = $req->input("email");
        $mobile = $req->input("mobile");
        $pass = $req->input("pass");
        $cpass = $req->input("cpass");
        $details = $req->input("details");
        $token = $req->input("_token");
        // print_r( $req->input() );

        $req->validate([
            "fname"=>"required",
            "lname"=>"required",
            "email"=>"required | email | unique:users",
            "mobile"=>"required | size:10 | numeric",
            "pass"=>"required | min:5 | max:10",
            "cpass"=>"required | min:5 | max:10 | same:pass",
            "details"=>"required"
        ]);

        return view("form", [
                                "token"=>$token,
                                "fname"=>$fname,
                                "lname"=>$lname,
                                "pass"=>$pass,
                                "email"=>$email,
                                "mobile"=>$mobile,
                                "details"=>$details
                            ]);
    }
}
