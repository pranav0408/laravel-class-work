<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokeCon extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $Request,$id)
    {
        return view("test",['name'=>$id]);
    }
}
