<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'title' => 'Administrateur'],
            ['name' => 'editor', 'title' => 'Éditeur'],
            ['name' => 'user', 'title' => 'Utilisateur'],
        ]);
    }
}
