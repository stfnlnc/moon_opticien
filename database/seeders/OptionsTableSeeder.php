<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert([
            'site_url' => 'https://studiokhi.com',
            'site_name' => 'Studio Khi',
            'site_description' => 'Description du site',
            'site_keywords' => 'mots clés du site',
        ]);
    }
}
