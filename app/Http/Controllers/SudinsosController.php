<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Pelayanan;

use Illuminate\Http\Request;

class SudinsosController extends Controller
{
    //
    public function beranda()
    {
        $beritas = Berita::latest()->take(5)->get(); // atau paginate()

        return view('sudinsos.beranda', compact('beritas'));
    }
    public function profil()
    {
        return view('sudinsos.profil');
    }
    public function pelayanan()
    {
        $pelayanans = Pelayanan::all();
        return view('sudinsos.pelayanan', compact('pelayanans'));
    }
    public function berita()
    {
        $beritas = Berita::latest()->get();
        return view('sudinsos.berita', compact('beritas'));
        return view('sudinsos.berita');
    }
}
