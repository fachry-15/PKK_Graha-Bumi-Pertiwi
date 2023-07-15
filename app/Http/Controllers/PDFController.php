<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF as PDF;
use App\DaftarAnggota;
use Illuminate\Support\Facades\DB;
use Request;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $pengurus = DaftarAnggota::all()
            ->whereNotIn('jabatan', ['Anggota'])
            ->where('tahunjbt', ['2023 - 2028']);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('PDF.pengurus', ['pengurus' => $pengurus]);
        return $pdf->stream('Laporan_pengurus.pdf');
    }
}
