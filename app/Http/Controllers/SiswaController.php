<?php

namespace App\Http\Controllers;

use App\Imports\Importsiswa;
use App\Siswa;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


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
    public function hapus($id)
    {
        User::find($id)->delete();
        return back();
    }
    public function ubah($id)
    {
        $datauser = User::find($id);
        return view('siswa.ubah', ['datauser' => $datauser]);
    }
    public function ubahproses(Request $req)
    {

        $user = User::find($req->user_id);
        $user->email = $req['nisn'] . "@smkn7ptk.sch.id";
        $user->name = $req['name'];
        if ($req['password']) {
            $user->password = bcrypt($req['password']);
        }
        $user->save();
        $siswa = Siswa::where('user_id', $req->user_id)->first();
        $siswa->nisn = $req['nisn'];
        $siswa->tempat_lahir = $req['tempat'];
        $siswa->tanggal_lahir = $req['tanggal'];
        $siswa->pstudi = $req['pstudi'];
        $siswa->jurusan = $req['jurusan'];
        $siswa->kelas = $req['kelas'];
        $siswa->wali = $req['wali'];
        $siswa->keterangan = $req['keterangan'];
        $siswa->save();
        return redirect()->route('siswa.index');
    }
}
