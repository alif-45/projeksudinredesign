<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Pelayanan;
use App\Models\Schedule;

use Illuminate\Http\Request;

class SudinsosController extends Controller
{
    //
    public function beranda()
    {

        $schedules = Schedule::orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->take(2)
            ->get();

        return view('sudinsos.beranda', compact('schedules'));

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
    }
}
