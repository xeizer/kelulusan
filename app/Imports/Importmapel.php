<?php

namespace App\Imports;

use App\Mapel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Importmapel implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $col) {
            Mapel::create([
                'nama_mapel' => $col['mapel'],
            ]);
        };
    }
}
