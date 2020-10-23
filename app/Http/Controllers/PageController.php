<?php

namespace App\Http\Controllers;

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
}
