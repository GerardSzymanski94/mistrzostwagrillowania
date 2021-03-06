<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::on('mysql2')->create([
            'name' => 'Admin',
            'email' => 'admin@afekt.pl',
            'password' => Hash::make('K98ogr56uP'),
            'admin' => true,
        ]);

    }
}
