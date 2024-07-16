<?php

namespace Database\Seeders;

use App\Models\Diabetes;
use App\Models\Gif;
use App\Models\Hipertensi;
use App\Models\KankerServik;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\UsiaProduktif;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nip' => '1234',
            'name' => 'admin',
            'password' => '1234',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Manggar'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Damar'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kelapa Kampit'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Gantung'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Renggian'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Dendang'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Simpang Pesak'
        ]);


        // Diabetes
        Diabetes::create([
            'kecamatan_id' => 1,
        ]);
        Diabetes::create([
            'kecamatan_id' => 2
        ]);
        Diabetes::create([
            'kecamatan_id' => 3
        ]);
        Diabetes::create([
            'kecamatan_id' => 4
        ]);
        Diabetes::create([
            'kecamatan_id' => 5
        ]);
        Diabetes::create([
            'kecamatan_id' => 6
        ]);
        Diabetes::create([
            'kecamatan_id' => 7
        ]);

        // Hipertensi
        Hipertensi::create([
            'kecamatan_id' => 1,
        ]);
        Hipertensi::create([
            'kecamatan_id' => 2
        ]);
        Hipertensi::create([
            'kecamatan_id' => 3
        ]);
        Hipertensi::create([
            'kecamatan_id' => 4
        ]);
        Hipertensi::create([
            'kecamatan_id' => 5
        ]);
        Hipertensi::create([
            'kecamatan_id' => 6
        ]);
        Hipertensi::create([
            'kecamatan_id' => 7
        ]);

        // Kanker Serviks
        KankerServik::create([
            'kecamatan_id' => 1,
        ]);
        KankerServik::create([
            'kecamatan_id' => 2
        ]);
        KankerServik::create([
            'kecamatan_id' => 3
        ]);
        KankerServik::create([
            'kecamatan_id' => 4
        ]);
        KankerServik::create([
            'kecamatan_id' => 5
        ]);
        KankerServik::create([
            'kecamatan_id' => 6
        ]);
        KankerServik::create([
            'kecamatan_id' => 7
        ]);


        // GIF
        Gif::create([
            'kecamatan_id' => 1,
        ]);
        Gif::create([
            'kecamatan_id' => 2
        ]);
        Gif::create([
            'kecamatan_id' => 3
        ]);
        Gif::create([
            'kecamatan_id' => 4
        ]);
        Gif::create([
            'kecamatan_id' => 5
        ]);
        Gif::create([
            'kecamatan_id' => 6
        ]);
        Gif::create([
            'kecamatan_id' => 7
        ]);

        // Usia Produktif
        UsiaProduktif::create([
            'kecamatan_id' => 1,
        ]);
        UsiaProduktif::create([
            'kecamatan_id' => 2
        ]);
        UsiaProduktif::create([
            'kecamatan_id' => 3
        ]);
        UsiaProduktif::create([
            'kecamatan_id' => 4
        ]);
        UsiaProduktif::create([
            'kecamatan_id' => 5
        ]);
        UsiaProduktif::create([
            'kecamatan_id' => 6
        ]);
        UsiaProduktif::create([
            'kecamatan_id' => 7
        ]);
    }
}
