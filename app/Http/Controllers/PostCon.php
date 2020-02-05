<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return "<h3>Welcome <br> The data passed to controller is </h3><h4>$id</h4>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=[ 
            'first-post' => ' lorem ipsum doler sit as First Post ',
            'second-post'=> ' aler ip fera code as Second Post '
        ];
        if ( array_key_exists($id,$data) ){ 
            return view('test',['name'=>$data[$id]]);
            // return view('post')->with('id',$id);
            // return view('post',compact('id'));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dataFromView(Request $req){
        $data = $req->input('data');
        // return view('data')->with('data',$data);
        return view('home',['data'=>$data,'title'=>'Form','form'=>true]);
    }
    public function navigate($nav){
        $nav_title = [
            'home' => 'Home',
            'about' => 'About',
            'contact' => 'Contact Us',
        ];
        if( $nav == 'view' ){
            return view('home',['title'=>'Form','form'=>true]);
        }
        else{
            if( array_key_exists($nav,$nav_title) ){
                return view('home',['title'=>$nav_title[$nav]]);
            }
            else{
                return redirect('/nav/home');
            }
        }

    }
}
