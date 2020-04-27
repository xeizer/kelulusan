<?php

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
        User::create([
            'name' => 'Mutia Atmaja',
            'email' => 'keiser.form@gmail.com',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
