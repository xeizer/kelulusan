<?php

namespace App\Http\Controllers;

use App\Siswa;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HalamansiswaController extends Controller
{
    //
    public function cetak(Request $req)
    {
        if ($req->setuju == "SAYA SETUJU") {
            $siswa = Siswa::where('user_id', Auth::id())->first();
            $data = [
                'nama' => $siswa->user->name,
                'nisn' => $siswa->nisn,
                'jurusan' => $siswa->jurusan,
                'ttl' => $siswa->tempat_lahir . " , " . date('d/m/Y', strtotime($siswa->tanggal_lahir)),
                'keterangan' => $siswa->keterangan,
            ];
            $pdf = PDF::loadView('halamansiswa.cetak', $data)->setPaper('a4');
            //$pdf->setEncryption('rahasia', 'rahasia', array('copy', 'print'));
            return $pdf->download('Surat Kelulusan' . $data['nisn'] . '.pdf');
        } else {
            return back()->withErrors([
                'pesan' => 'Anda harus mengetik "SAYA SETUJU" '
            ]);
        }
    }
}
