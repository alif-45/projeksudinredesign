<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SudinsosController extends Controller
{
    //
    public function beranda()
    {
        return view('sudinsos.beranda');
    }
    public function profil()
    {
        return view('sudinsos.profil');
    }
    public function pelayanan()
    {
        return view('sudinsos.pelayanan');
    }
    public function berita()
    {
        return view('sudinsos.berita');
    }
}
