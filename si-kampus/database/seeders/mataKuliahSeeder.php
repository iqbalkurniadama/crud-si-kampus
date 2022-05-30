<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliahs')->insert([
            'nama_matkul' => 'aljabar',
            'jumlah_sks' => "2"
        ]);
    }
}
