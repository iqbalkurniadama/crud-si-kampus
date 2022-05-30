<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class riwayatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riwayat_pendidikans')->insert([
            'strata' => 'pertanian',
            'jurusan' => 'ilmu pertanian',
            'sekolah' => 'ugm',
            'tahun_mulai' => '2022-05-01',
            'tahun_selesai' => '2022-05-16',
        ]);
    }
}
