<?php

use Illuminate\Database\Seeder;
use App\KomentarKategori;

class KomentarKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $komentar = KomentarKategori::create(['id_kategori' => '1', 'id_user' => '1', 'isi_komentar' => 'komentar saya cukup menarik' ]);
    }
}
