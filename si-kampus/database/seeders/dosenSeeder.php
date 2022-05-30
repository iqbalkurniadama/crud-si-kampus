<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            'nama' => 'juki',
            'nip' => '12345',
            'Gelar' => 'sarjana Kedokteran',
            'riwayat_pendidikan' => 'S1 Kedokteran',

        ]);
    }
}
