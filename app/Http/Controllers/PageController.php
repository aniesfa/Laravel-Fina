<?php

namespace App\Http\Controllers;
use App\User; // pemanggilan table user
use Auth; //pemanggilan fungsi yang sedang login
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'SELAMAT DATANG';
    }

    public function about(){
        return 'NAMA : ANIES FIJRIYAH AGUSTINA NIM : 1931710079';
    }

    public function article($id){
        return 'Halaman artikel dengan id '.$id;
    }

    //function profile
    public function profile(){
        $auth = Auth::user()->id; // pemanggilan id user yang sedang login
        $data = User::where('id',$auth)->first(); // query orm get data user login
        return view('profile',compact('data')); // parsing data query ke view
    }

    public function updateImageProfile(Request $request,$id){
        $image_name = $request->file('images')->store('public'); //simpan gambar di folder storage/public
        $data = User::find($id);
        $data->images = $image_name;
        $data->update();
        return redirect()->back();
    }
}
