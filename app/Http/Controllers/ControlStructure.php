<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlStructure extends Controller
{
    public function index(){
        // $name = "Pranav";
        // $name = "Singh";
        $name = "";
        $records = [];
        return view('ControlStruc',["name"=>$name,"records"=>$records]);
    }
}
