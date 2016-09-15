<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Http\Request;



Route::resource('registrations','RegistrationController',[
    'only' => [ 'index' , 'create' , 'store']
]);


Route::post('register', function (Request $request) {
    $name = $request->input('name');
    $matric = $request->input('matric');
    $username = $request->input('username');
    $password = $request->input('password');
    $email = $request->input('email');
    $contact = $request->input('contact');
    $tag = $request->input('tag');
    $section = $request->input('section');
    $question = $request->input('question');

    $this->validate($request,[
        'name' => 'required',
        'matric' => 'required',
        'username' => 'required',
        'password' => 'required',
        'email' => 'required',
        'contact' => 'required',
        'tag' => 'required',
        'section' => 'required',
        'question' => 'required'
    ]);
    
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home.json', 'HomeController@all');
