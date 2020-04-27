<?php

namespace App\Imports;

use App\Siswa;
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
            Siswa::create([
                'nama' => $col['nama'],
                'nis' => $col['nis'],
                'pstudi' => $col['pstudi'],
                'jurusan' => $col['jurusan'],
                'kelas' => $col['kelas'],
                'wali' => $col['wali'],
            ]);
        }
    }
}
