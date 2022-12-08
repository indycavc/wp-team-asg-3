<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nim' => '2440094472',
            'nama' => 'Vivianit Indyca Vica',
            'jenis_kelamin' => 'P',
            'jurusan' => 'Teknik Informatika',
            'alamat'=> 'Deket Binus Anggrek'
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '2440013134',
            'nama' => 'Shannya Maureen Michelia',
            'jenis_kelamin' => 'P',
            'jurusan' => 'Teknik Informatika',
            'alamat'=> 'Deket Syahdan'
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '2440050350',
            'nama' => 'Nathanael Dihyan',
            'jenis_kelamin' => 'L',
            'jurusan' => 'Teknik Informatika',
            'alamat'=> 'Deket Ancol'
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '2440006186',
            'nama' => 'Giovanni Chandra',
            'jenis_kelamin' => 'P',
            'jurusan' => 'Teknik Informatika',
            'alamat'=> 'Kos sebelah Binus'
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '2440108332',
            'nama' => 'Azizah Nabilah Anwar',
            'jenis_kelamin' => 'P',
            'jurusan' => 'Teknik Informatika',
            'alamat'=> 'Pokoknya ke Binus naik kereta'
        ]);
    }
}
