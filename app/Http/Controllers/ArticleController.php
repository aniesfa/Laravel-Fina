<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Cache;
use Gate;
use PDF;
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
if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
            }
$article = new Article();

        $article->title = $request->title;
        $article->content = $request->content;
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
 if($article->featured_image &&
        file_exists(storage_path('app/public/' . $article->featured_image)))
    {
        \Storage::delete('public/'.$article->featured_image);
    }
    $image_name = $request->file('image')->store('images', 'public');
    $article->featured_image = $image_name;
$article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
 public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
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
    // $article = Article::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'featured_image' => $request->image
        // ]); 