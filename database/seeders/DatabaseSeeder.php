<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Otip',
            'email' => 'Admin15@gmail.com',
            'no_hp' => '081212698819',
            'askot'=> 'bogor',
            'password' => bcrypt('admin15'),
        ]);
    }
}
