<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Cache;
<<<<<<< HEAD
use Gate;
use PDF;
=======
<<<<<<< HEAD
use Gate;
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
class ArticleController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage-articles')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
<<<<<<< HEAD
=======
=======
class ArticleController extends Controller
{
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
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
<<<<<<< HEAD
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
            }
=======
        // $article = Article::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'featured_image' => $request->image
        // ]);
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
        $article = new Article();

        $article->title = $request->title;
        $article->content = $request->content;
<<<<<<< HEAD
        $article->featured_image = $request->$image_name;
=======
        $article->featured_image = $request->featured_image;
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
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
<<<<<<< HEAD
        if($article->featured_image &&
        file_exists(storage_path('app/public/' . $article->featured_image)))
    {
        \Storage::delete('public/'.$article->featured_image);
    }
    $image_name = $request->file('image')->store('images', 'public');
    $article->featured_image = $image_name;
=======
        $article->featured_image = $request->image;
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
        $article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
<<<<<<< HEAD
    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
       }       
=======
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
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
<<<<<<< HEAD
    // } 
    // $article = Article::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'featured_image' => $request->image
        // ]); 
=======
    // }  
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
