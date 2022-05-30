<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'juki',
            'nim' => '1234',
            'jenisKelamin' => 'laki-laki',
            'ttl' => 'jogja, 12 januari 2021'
        ]);
    }
}
