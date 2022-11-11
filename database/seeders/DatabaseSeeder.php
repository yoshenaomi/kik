<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Mahasiswa;
use \App\Models\ProyekAkhir;
use \App\Models\Ruangan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Mahasiswa::factory(20)->create();
        ProyekAkhir::factory(20)->create();
        Ruangan::factory(20)->create();

        User::create([
            'name' => 'Dosen Pembimbing',
            'username' => 'Dospem',
            'email' => 'dospem666@gmail.com',
            'password' => bcrypt('dospem666'),
        ]);
    }
}
