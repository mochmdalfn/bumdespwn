<?php

namespace Database\Seeders;

use App\Models\Produkpertanian;
use Illuminate\Database\Seeder;

class ProdukpertanianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produkpertanian::create([
            'name' => 'Kapas',
            'gambar' => '1661344663_Screenshot%20from%202022-06-15%2014-04-17.png'
        ]);
        Produkpertanian::create([
            'name' => 'Gabah',
            'gambar' => '1661344663_Screenshot%20from%202022-06-15%2014-04-17.png'
        ]);
        Produkpertanian::create([
            'name' => 'Jagung',
            'gambar' => '1661344663_Screenshot%20from%202022-06-15%2014-04-17.png'
        ]);    
    }
}
