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
// Route::resource('post','PostCon'); //named route using resource controller
// Route::resource('con','PostCon'); //named route using resource controller

// Data from view
// Route::get('/view',function() {
//     return view('data');
// });
// Route::post('/view','PostCon@dataFromView');

// navigation
// Route::get('/nav/{nav}','PostCon@navigate');
// Route::post('/nav/view','PostCon@dataFromView');

// Invoke Controller
// Route::get('/invoke/{id}','InvokeCon');

// Middleware
// Route::get('role/{id}',[
//     'middleware' => 'role:editor',
//     'uses' => 'TestCon@index'
// ]);

// One Controller and Two Middlewares
// Route::get('usercon',[
//     'middleware' => 'fm',
//     'uses' => 'UserCon@showPath'
// ]);

// parent and child
// Route::get('/child',function() {
//     return view('child');
// });

// view from controller
// Route::get('/ctrlStr','ControlStructure@index');

// find grade using switch case
// Route::get('/grade/{value}',function($value) {
//     return view('grade',['check'=>$value]);
// });

// loop
// Route::get('/loop',function() {
//     $record = ["Lorem","Ipsum","Doler","Sit"];
//     return view('loop',["records"=>$record]);
// });

// form
// Route::View('/form','form');
// ROute::post('/form','FormHandle@index');

// ************** Raw queries *****************
// // db select data
// Route::get('/db/select','dbCheck@dbCheck');
// // db insert data
// Route::get('/db/insert','dbCheck@dbInsert');
// // db update data
// Route::get('/db/update','dbCheck@dbUpdate');
// // db delete data
// Route::get('/db/delete','dbCheck@dbDelete');

// **************** Laravel queries *******************
// db new functions
Route::get('/db2/create','dbCheck2@create');
// db get 
Route::get('/db2/get','dbCheck2@get');
// db first 
Route::get('/db2/first','dbCheck2@first');
// db where 
Route::get('/db2/where','dbCheck2@where');
// db pluck 
Route::get('/db2/pluck','dbCheck2@pluck');
// db find 
Route::get('/db2/find','dbCheck2@find');
// db insert 
Route::get('/db2/insert','dbCheck2@insert');