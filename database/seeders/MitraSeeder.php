<?php

namespace Database\Seeders;

use App\Models\Mitra;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mitra::create([
            'pemilik' => 'Al',
            'nmmitra' => 'Al',
            'jenisusaha_id' => 1,
            'produkmitra' => 'Beras',
            'nomerhandphone' => '083107367831',
            'alamat' => 'Cirebon',
            'gambar' => '1661344663_Screenshot%20from%202022-06-15%2014-04-17.png'
        ]);

        Mitra::create([
            'pemilik' => 'El',
            'nmmitra' => 'El',
            'jenisusaha_id' => 2,
            'produkmitra' => 'Apel',
            'nomerhandphone' => '083107367830',
            'alamat' => 'Cirebon',
            'gambar' => '1661344663_Screenshot%20from%202022-06-15%2014-04-17.png'
        ]);
        
        Mitra::create([
            'pemilik' => 'Ul',
            'nmmitra' => 'Ul',
            'jenisusaha_id' => 3,
            'produkmitra' => 'Kopi',
            'nomerhandphone' => '083107367829',
            'alamat' => 'Cirebon',
            'gambar' => '1661344663_Screenshot%20from%202022-06-15%2014-04-17.png'
        ]);
    }
}
