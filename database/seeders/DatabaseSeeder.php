<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Mochamad Alfian',
            'username' => 'mchalfn',
            'email' => 'official.mochalfian@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Agus Kermala',
            'username' => 'aguspr',
            'email' => 'agus123@gmail.com',
            'password' => bcrypt('12345')
        ]);

        category::create([
            'name' => 'Bisnis',
            'slug' =>'bisnis'
        ]);

        category::create([
            'name' => 'Ekonomi',
            'slug' =>'ekonomi'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' =>'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor condimentum congue.',
            'tulisan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor condimentum congue. Curabitur orci felis, molestie sollicitudin orci ut, euismod ultrices eros. Nam suscipit massa sed augue rhoncus, a aliquet odio malesuada. Vivamus at diam nec arcu tincidunt laoreet. Duis ultrices fermentum placerat. Pellentesque sed sollicitudin ligula. Nunc feugiat, massa sit amet porttitor vestibulum, leo nibh semper erat, at sodales orci lacus id erat.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' =>'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor condimentum congue.',
            'tulisan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor condimentum congue. Curabitur orci felis, molestie sollicitudin orci ut, euismod ultrices eros. Nam suscipit massa sed augue rhoncus, a aliquet odio malesuada. Vivamus at diam nec arcu tincidunt laoreet. Duis ultrices fermentum placerat. Pellentesque sed sollicitudin ligula. Nunc feugiat, massa sit amet porttitor vestibulum, leo nibh semper erat, at sodales orci lacus id erat.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ketiga',
            'slug' =>'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor condimentum congue.',
            'tulisan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor condimentum congue. Curabitur orci felis, molestie sollicitudin orci ut, euismod ultrices eros. Nam suscipit massa sed augue rhoncus, a aliquet odio malesuada. Vivamus at diam nec arcu tincidunt laoreet. Duis ultrices fermentum placerat. Pellentesque sed sollicitudin ligula. Nunc feugiat, massa sit amet porttitor vestibulum, leo nibh semper erat, at sodales orci lacus id erat.',
            'category_id' => 1,
            'user_id' => 2
        ]);

    }
}
