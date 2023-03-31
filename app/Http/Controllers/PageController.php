<?php

namespace App\Http\Controllers;

use App\Models\Post;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function akun(){
        return view('/master/akun');
    }
    public function sekolah(){
        return view('/master/sekolah');
    }
    public function user(){
        return view('/master/user');
    }
    public function data(){
        return view('/data-siswa');
    }
}
