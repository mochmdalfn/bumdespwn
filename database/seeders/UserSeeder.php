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
            'status' => 'active',
            'password' => Hash::make('alfian'),
        ]);
    }
}
