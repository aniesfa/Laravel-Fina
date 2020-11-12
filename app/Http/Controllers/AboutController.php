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
=======
<<<<<<< HEAD
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
    public function __construct()
    {
        $this->middleware('auth');
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
}