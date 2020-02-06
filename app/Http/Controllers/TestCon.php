<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCon extends Controller
{
    public function index($id){
        return "Controller used: Test Controller <br> Id: $id";
    }

    public function register(){
        
    }
}