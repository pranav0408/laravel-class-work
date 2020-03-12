<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbCheck2 extends Controller
{
    public function create(){
        $users=DB::statement( 'CREATE TABLE `profile`(`id` int(11) unsigned NOT NULL AUTO_INCREMENT, PRIMARY KEY(`id`))'); 
        dd($users);
    }

    public function get(){
        // all the values
        $users=DB::table('users')->get();
        foreach( $users as $name ){
            echo "<b>Name: </b> $name->name <br>";
        }
        // dd($users);
    }

    public function first(){
        // only first value
        $users=DB::table('users')->first();
        dd($users);
    }

    public function where(){
        // match a clause and return value; value() returns the first from these results
        // $users=DB::table('users')->where('name','ps')->get();
        // $users=DB::table('users')->where('name','ps')->first();
        $users=DB::table('users')->where('name','ps')->value('email');
        dd($users);
    }

    public function pluck(){
        // all the values of a specific column
        $users=DB::table('users')->pluck('pass');
        foreach( $users as $pass ){
            echo "<b>Pass: </b> $pass <br>";
        }
        // dd($users);
    }
}
