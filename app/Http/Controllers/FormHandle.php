<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormHandle extends Controller
{
    public function index(Request $req ){
        
        $name = $req->input("name");
        $pass = $req->input("pass");
        // print_r( $req->input() );
        return view("form",["name"=>$name,"pass"=>$pass]);
    }
}
