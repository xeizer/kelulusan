<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\Importmapel;
use App\Mapel;
use Maatwebsite\Excel\Facades\Excel;

class MapelController extends Controller
{
    public function index()
    {
        return view('mapel.index', [
            'data' => Mapel::cursor()
        ]);
    }
    public function importMapel(Request $req)
    {
        Excel::import(new Importmapel, request()->file('file'));
        return back();
    }
}
