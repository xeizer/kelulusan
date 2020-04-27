<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;

class Dataawal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //peran
        Role::create([
            'name' => 'admin',
            'display_name' => 'administrator'
        ]);
        Role::create([
            'name' => 'siswa',
            'display_name' => 'Peserta Didik'
        ]);
        User::create([
            'name' => 'Mutia Atmaja',
            'email' => 'keiser.form@gmail.com',
            'password' => bcrypt('rahasia'),
        ])->attachRole('admin');
        User::create([
            'name' => 'Teguh Firmansyah',
            'email' => 't36uh.f4n5@gmail.com',
            'password' => bcrypt('rahasia'),
        ])->attachRole('admin');
    }
}
