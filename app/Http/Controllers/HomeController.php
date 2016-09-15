<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::all();
        return view('home')->with(compact('registrations'));;
    }

    /**
     * Send Json Object.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $registrations = Registration::all();
        return response()->json($registrations);
    }
}
