<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama',
        'nis',
        'pstudi',
        'jurusan',
        'kelas',
        'wali',
    ];
}
