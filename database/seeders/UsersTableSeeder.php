<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan satu user dengan data yang sudah ditentukan
        User::create([
            'name' => 'DevUser',
            'email' => 'user@dev.com',
            'password' => Hash::make('devuserr'),
        ]);
    }
}
