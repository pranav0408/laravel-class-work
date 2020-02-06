<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCon extends Controller
{
    public function __construct()
    {
        $this->middleware('sm');
    }
    public function showPath(Request $request){
        $uri = $request->path();
        $url = $request->url();
        $method = $request->method();

        echo "<br>URI: $uri";
        echo "<br>URL: $url";
        echo "<br>Method: $method";
    }
}
