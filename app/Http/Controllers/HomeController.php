<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD
    
=======
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
    public function __construct()
    {
        $this->middleware('auth');
    }
<<<<<<< HEAD
=======

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD

=======
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
}
