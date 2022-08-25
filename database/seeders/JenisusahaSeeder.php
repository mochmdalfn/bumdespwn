<?php

namespace Database\Seeders;

use App\Models\Jenisusaha;
use Illuminate\Database\Seeder;

class JenisusahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenisusaha::create([
            'name' => 'Ekonomi',
            'penjelasan' => 'ekonomi'
        ]);
        Jenisusaha::create([
            'name' => 'Bisnis',
            'penjelasan' => 'bisnis'
        ]);
        Jenisusaha::create([
            'name' => 'Percetakan',
            'penjelasan' => 'percetakan'
        ]);
    }
}
