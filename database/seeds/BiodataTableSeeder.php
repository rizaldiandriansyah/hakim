<?php

use Illuminate\Database\Seeder;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodata')->insert([
            'nama' => 'Administrator',
            'no_ktp' => '-',
            'tempat_lahir' => '-',
            'tanggal_lahir' => '1998-12-12',
            'telp' => '-',
            'alamat' => '-',
            'desa' => '-',
            'kecamatan' => '-',
            'user_id' => 1,
        ]);
    }
}
