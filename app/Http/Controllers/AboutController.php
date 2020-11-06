<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(){

        
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::all();
        });
    }

    public function about(){  
        return view('about');
    }
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
    }
=======
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
}