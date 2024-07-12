<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert(
            [
                [
                    'options_key' => 'address',
                    'options_value' => null,
                    'options_name' => 'Adresse',
                    'options_category' => 'address'
                ],
                [
                    'options_key' => 'postal_code',
                    'options_value' => null,
                    'options_name' => 'Code Postal',
                    'options_category' => 'address'
                ],
                [
                    'options_key' => 'city',
                    'options_value' => null,
                    'options_name' => 'Ville',
                    'options_category' => 'address'
                ],
                [
                    'options_key' => 'email',
                    'options_value' => null,
                    'options_name' => 'Email',
                    'options_category' => 'informations'
                ],
                [
                    'options_key' => 'phone',
                    'options_value' => null,
                    'options_name' => 'Téléphone',
                    'options_category' => 'informations'
                ],
                [
                    'options_key' => 'smtp_email',
                    'options_value' => null,
                    'options_name' => 'SMTP Email',
                    'options_category' => 'smtp'
                ],
                [
                    'options_key' => 'smtp_password',
                    'options_value' => null,
                    'options_name' => 'SMTP Mot de passe',
                    'options_category' => 'smtp'
                ],
                [
                    'options_key' => 'monday',
                    'options_value' => null,
                    'options_name' => 'Lundi',
                    'options_category' => 'schedule'
                ],
                [
                    'options_key' => 'tuesday',
                    'options_value' => null,
                    'options_name' => 'Mardi',
                    'options_category' => 'schedule'
                ],
                [
                    'options_key' => 'wednesday',
                    'options_value' => null,
                    'options_name' => 'Mercredi',
                    'options_category' => 'schedule'
                ],
                [
                    'options_key' => 'thursday',
                    'options_value' => null,
                    'options_name' => 'Jeudi',
                    'options_category' => 'schedule'
                ],
                [
                    'options_key' => 'friday',
                    'options_value' => null,
                    'options_name' => 'Vendredi',
                    'options_category' => 'schedule'
                ],
                [
                    'options_key' => 'saturday',
                    'options_value' => null,
                    'options_name' => 'Samedi',
                    'options_category' => 'schedule'
                ],
                [
                    'options_key' => 'sunday',
                    'options_value' => null,
                    'options_name' => 'Dimanche',
                    'options_category' => 'schedule'
                ],
                [
                    'options_key' => 'instagram',
                    'options_value' => null,
                    'options_name' => 'Instagram',
                    'options_category' => 'social'
                ],
                [
                    'options_key' => 'facebook',
                    'options_value' => null,
                    'options_name' => 'Facebook',
                    'options_category' => 'social'
                ],
            ]
        );
    }
}
