<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateFormPost;

class FormHandle extends Controller
{
    public function index( /*Request $req*/ validateFormPost $req ){
        
        return back()->withInput();
        
        $fname = $req->input("fname");
        $lname = $req->input("lname");
        $email = $req->input("email");
        $mobile = $req->input("mobile");
        $pass = $req->input("pass");
        $cpass = $req->input("cpass");
        $details = $req->input("details");
        $token = $req->input("_token");
        // print_r( $req->input() );


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
