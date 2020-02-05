<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/a',function () {
//     $jsob = ['name' => 'Pranav Singh', 'section' => 'K17MY' ];
//     return $jsob;
// });

// Route::get('/var/{id}',function ($id) {
//     return "<h3>The value passed in url is : $id </h3>";
// });

// Route::get('/var',function () {
//     $id = request('id');
//     $name = request('name');
//     return "<h3>The id is: $id <br> The name is: $name </h3>";
// });

// Route::get('/script',function () {
//     $scr = request('scr');
//     return $scr;
// });

// Route::get('/test1',function () {
//     $name = request('name');
//     return view('test',['name'=>$name]);
// });

// Route::get('/test2/{test}',function ($test) {
//     return view('test',['name'=>$test]);
// });


// ******* redirecting *******
// Route::get('/content/{id}',function ($id) {
//     if( $id == 'abc' ){
//         return view('abc');
//     }
//     else{
//         return redirect('/');
//     }
// });

// named route
// Route::get('/admin/post/11705530',array(
//     'as'=>'admin.home', function () {
//         $url=route('admin.home'); //named route
//         return 'This url route is '.$url;
// }));

// Route::get('/admin',function () {
//     return redirect()->route('admin.home');
// });


// Controller
// Route::get('/con/{id}','PostCon@index');
// Route::get('/con/{id}','PostCon@show');
// Route::resource('post','PostCon'); //named route using controller
// Route::resource('con','PostCon'); //named route using controller

// Data from view
// Route::get('/view',function() {
//     return view('data');
// });
// Route::post('/view','PostCon@dataFromView');

// navigation
Route::get('/nav/{nav}','PostCon@navigate');
Route::post('/nav/view','PostCon@dataFromView');