<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
class Home1Controller extends Controller
{
    public function __invoke(){
        $articles = Article::get();
        return view('home1',['articles' => $articles]);
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::all();
        });
    }   
}
