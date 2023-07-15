<?php

namespace App\Http\Controllers;

use App\DaftarAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SystemControllers extends Controller
{
    public function tambahanggota()
    {
        $daftar_anggota = null;
        return view('daftar', compact('daftar_anggota'));
    }

    public function createanggota(Request $request)
    {
        DB::table('anggota')->insert([
            'rt' => $request->rt,
            'namapanjang' => $request->namapanjang,
            'namapanggilan' => $request->namapanggilan,
            'jabatan' => $request->jabatan,
            'tahunjbt' => $request->tahunjbt
        ]);

        return redirect()->route('anggota')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function createkeuangan(Request $request)
    {
        DB::table('keuangan')->insert([
            'jenis' => $request->jenis,
            'keterangan' => $request->keterangan,
            'sumber' => $request->sumber,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('keuangan')->with('success', 'Data Keuangan Berhasil');
    }

    public function createjabatan(Request $request)
    {
        DB::table('jabatan')->insert([
            'jabatan' => $request->jabatan,
            'tanggalpenambahan' => $request->tanggalpenambahan,
        ]);

        return redirect()->back()->with('success', 'berhasil menambah jabatan');
    }

    public function updateanggota(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            DaftarAnggota::where(['id' => $id])->update([
                'rt' => $data['rt'],
                'namapanjang' => $data['namapanjang'],
                'namapanggilan' => $data['namapanggilan'],
                'jabatan' => $data['jabatan'],
                'tahunjbt' => $data['tahunjbt']
            ]);
            return redirect()->back()->with('success', 'Data Berhasil di Update');
        }
    }

    public function hapusanggota($id)
    {
        $data = DaftarAnggota::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
