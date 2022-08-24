<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'alfian',
            'email' => 'alfian@gmail.com',
            'username' => 'alfian',
            'level' => 'super',
            'status' => 'active',
            'password' => Hash::make('alfian'),
        ]);
        User::create([
            'name' => 'bagas',
            'email' => 'bagas@gmail.com',
            'username' => 'bagas',
            'level' => 'biasa',
            'status' => 'active',
            'password' => Hash::make('bagas'),
        ]);
    }
}
