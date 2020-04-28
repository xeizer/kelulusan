<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'user_id',
        'nis',
        'pstudi',
        'jurusan',
        'kelas',
        'wali',
        'keterangan'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
