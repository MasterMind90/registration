<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $newRegistration = new Registration();
        $newRegistration->name = $name; 
        $newRegistration->matric = $matric;
        $newRegistration->username = $username; 
        $newRegistration->password = $password;
        $newRegistration->email = $email;
        $newRegistration->section = $section;
        $newRegistration->contact = $contact;
        $newRegistration->tag = $tag;
        $newRegistration->question = $question;
        if ( !$newRegistration->save() ){
            return 'something went wrong';
        }
        return 'Successfully Saved!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
