<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama' => Str::random(15),
            'jurusan' => 'Pendidikan Teknik Informatika dan Komputer',
            'angkatan' => '2020'
        ]);
    }
}
