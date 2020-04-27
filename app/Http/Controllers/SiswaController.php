<?php

namespace App\Http\Controllers;

use App\Imports\Importsiswa;
use App\Siswa;
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
}
