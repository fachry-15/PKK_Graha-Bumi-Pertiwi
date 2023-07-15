<?php

namespace App\Http\Controllers;

use Anggota;
use App\DaftarAnggota;
use App\Http\Controllers\Controller;
use App\Jabatan;
use App\keuangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function daftar()
    {
        $semua = DaftarAnggota::all();
        $pengurus = DaftarAnggota::all()->whereNotIn('jabatan', ['Anggota']);
        $jabatan = Jabatan::all();
        return view('daftar', compact('semua', 'pengurus', 'jabatan'));
    }

    public function pengurus()
    {
        $jabatan = Jabatan::all();
        return view('pengurus', compact('jabatan'));
    }

    public function keuangan()
    {
        $keuangan = keuangan::all();
        $pemasukan = keuangan::all()->whereIn('jenis', ['Pemasukan']);
        $pengeluaran = keuangan::all()->whereIn('jenis', ['Pengeluaran']);
        $Tpemasukan = keuangan::all()->whereIn('jenis', ['Pemasukan'])->sum('nominal');
        $Tpengeluaran = keuangan::all()->whereIn('jenis', ['Pengeluaran'])->sum('nominal');
        $total = $Tpemasukan - $Tpengeluaran;
        return view('keuangan', compact('keuangan', 'pemasukan', 'pengeluaran', 'Tpemasukan', 'Tpengeluaran', 'total'));
    }
}
