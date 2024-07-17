<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'lastname' => 'Lancelot',
            'firstname' => 'Stéfan',
            'email' => 'stefan@studiokhi.com',
            'password' => Hash::make('admin2024!!'),
        ]);
    }
}
