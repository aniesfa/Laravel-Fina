<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Cache;
class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
            return view('layouts.manage',['article' => $article]);
    }
    public function tambah()
    {
        return view('layouts.tambahArticle');
    }
    public function create(Request $request)
    {
        // $article = Article::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'featured_image' => $request->image
        // ]);
        $article = new Article();

        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->featured_image;
        $article->save();

        // $article = json_decode(json_encode($article));
        // echo "</pre>"; print_r($article); die; 
        return redirect('/manage');
    }
    public function edit($id)
    {
        $article = Article::find($id);
        return view('layouts.editarticle',['article'=>$article]);
    }
    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
}

 // public function index(Request $request){
    //     $value = Cache::rememberForever('articles', function(){  
    //         return \App\Article::all();

    //     });
    //     $articles = \App\Article::all();
    //     $page = 'Artikel';
    //     return view('allarticle',[ //load data semua artikel 
    //         'articles' => $articles,
    //         'halaman' => $page
    //     ]);
    // }  
