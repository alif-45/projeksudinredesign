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
        $beritas = Berita::latest()->take(3)->get();

        $schedules = Schedule::orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->take(3)
            ->get();

        return view('sudinsos.beranda', compact('schedules', 'beritas'));
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
        $beritas = Berita::latest()->paginate(3);
        return view('sudinsos.berita', compact('beritas'));
    }
    public function showBerita($id)
    {
        $berita = Berita::findOrFail($id);

        $beritas = Berita::where('id', '!=', $berita->id)
            ->latest()
            ->take(2)
            ->get();

        return view('sudinsos.show', compact('berita', 'beritas'));
    }

}
