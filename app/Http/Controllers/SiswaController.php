<?php

namespace App\Http\Controllers;

use App\Imports\Importsiswa;
use App\Siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class SiswaController extends Controller
{
    //
    public function index()
    {
        return view('siswa.index', [
            'data' => Siswa::cursor()
        ]);
    }
    public function importSiswa(Request $req)
    {
        Excel::import(new Importsiswa, request()->file('file'));
        return back();
    }
    public function lihatsiswa($id)
    {
        $data = Siswa::find($id);
        return view('siswa.lihat', [
            'data' => $data
        ]);
    }
    public function cetak(Request $req)
    {
        if ($req->setuju == "SAYA SETUJU") {
            $siswa = Siswa::find($req->id);

            $data = [
                'nama' => $siswa->user->name,
                'nisn' => $siswa->nisn,
                'jurusan' => $siswa->jurusan,
                'ttl' => $siswa->tempat_lahir . " , " . date('d/m/Y', strtotime($siswa->tanggal_lahir)),
                'keterangan' => $siswa->keterangan,
            ];
            //return view('siswa.cetak', $data);
            $pdf = PDF::loadView('siswa.cetak', $data);
            //$pdf->setEncryption('rahasia', 'rahasia', array('copy', 'print'));
            return $pdf->stream('Surat Kelulusan' . $data['nisn'] . '.pdf');
        } else {
            return back()->withErrors([
                'pesan' => 'Anda harus mengetik "SAYA SETUJU" '
            ]);
        }
    }
}
