<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function data_siswa(){
        $siswa = Siswa::all();
        return view('datasiswa.data-siswa',compact(['siswa']));
    }
}
