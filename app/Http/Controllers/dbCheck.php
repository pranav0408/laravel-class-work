<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbCheck extends Controller
{
    public function dbCheck(){
        // $users=DB::select('select * from users');
        // $users=DB::select("select * from users where name='pranav'");
        
        /* single data selection */
        // $email=DB::select('select email from users where name=:name',['name'=>'pranav']);
        // echo "Only email is <br>";
        // dd($email[0]->email);
        // echo "<br> <br>";
        
        $users=DB::select('select * from users where name=:name',['name'=>'pranav']);
        echo "<b>Data in array form :</b><br>";
        print_r($users);
        echo "<br> <br>";
        echo "<b>Data in json form :</b><br>";
        echo JSON_encode($users);
        echo "<br> <br>";
        echo "<b>Data in dump and die form :</b><br>";
        dd($users);
    }

    public function dbInsert(){
        
        $users=DB::insert("INSERT INTO users(`name`,`email`,`pass`) VALUES (:name,:email,:pass)" ,[
            'name'=>'ps',
            'email'=>'ps@xyz.com',
            'pass'=>'ps1234'
        ]);
        dd($users);
    }

    public function dbUpdate(){
        
        $users=DB::update("UPDATE users set `name`='hello' where name=:name ",[
            'name'=>'ps'
        ]);
        dd($users);
    }

    public function dbDelete(){
        
        $users=DB::delete("DELETE from users where name=:name ",[
            'name'=>'hello'
        ]);
        dd($users);
    }
}
