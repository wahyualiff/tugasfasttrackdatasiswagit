<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // halaman home
    public function home()
    {
        return view('beranda');
    }
    // halaman data siswa
    public function data_siswa()
    {
        return view('siswa');
    }
    // halaman data guru
    public function data_guru()
    {
        return view('guru');
    }
}
