<?php

namespace App\Imports;

use App\Siswa;
use App\Role;
use App\User;
use Carbon\Carbon;
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
            $date = new Carbon($col['ttl']);
            $tahun = date('Y', strtotime($date));
            $bulan = date('m', strtotime($date));
            $tanggal = date('d', strtotime($date));
            $user = User::updateOrCreate(
                ['email' => $col['nisn'] . "@smkn7ptk.sch.id"],
                [
                    'name' => $col['nama'],
                    'password' => bcrypt($tahun . $bulan . $tanggal),
                ]
            )->syncRoles(['siswa']);
            Siswa::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'nisn' => $col['nisn'],
                    'tempat_lahir' => $col['tempat_lahir'],
                    'tanggal_lahir' => $col['ttl'],
                    'pstudi' => $col['pstudi'],
                    'jurusan' => $col['jurusan'],
                    'kelas' => $col['kelas'],
                    'wali' => $col['wali'],
                ]
            );
        }
    }
}
