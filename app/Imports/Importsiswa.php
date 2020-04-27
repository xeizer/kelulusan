<?php

namespace App\Imports;

use App\Siswa;
use App\Role;
use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Importsiswa implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $col) {
            $user = User::create([
                'email' => $col['nis'] . "@smkn7ptk.sch.id",
                'name' => $col['nama'],
                'password' => '1234567890',
            ])->attachRole('siswa');
            Siswa::create([
                'user_id' => $user->id,
                'nis' => $col['nis'],
                'pstudi' => $col['pstudi'],
                'jurusan' => $col['jurusan'],
                'kelas' => $col['kelas'],
                'wali' => $col['wali'],
            ]);
        }
    }
}
