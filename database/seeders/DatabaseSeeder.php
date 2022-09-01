<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Config;
use App\Models\User;
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
            'name' => 'Noweb Publicidade',
            'username' => 'noweb',
            'email' => 'dev@noweb.io',
            'password' => 'admin_noweb@2022'
        ]);

        Config::upsert([
            [
                'field_name' => 'address',
                'field_type' => 'textarea',
                'field_value' => 'Rua xxxxxxx xxxxxx, xxx São Paulo - SP',
            ],
            [
                'field_name' => 'phone',
                'field_type' => 'text',
                'field_value' => '11900000000',
            ],
            [
                'field_name' => 'email',
                'field_type' => 'text',
                'field_value' => 'contato@docelar.com.br',
            ],
            [
                'field_name' => 'maps',
                'field_type' => 'textarea',
                'field_value' => '',
            ],
            [
                'field_name' => 'instagram',
                'field_type' => 'text',
                'field_value' => 'https://instagram.com.br',
            ],
            [
                'field_name' => 'facebook',
                'field_type' => 'text',
                'field_value' => 'https://facebook.com.br',
            ],
            [
                'field_name' => 'footer_text',
                'field_type' => 'textarea',
                'field_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl id massa fames ipsum pharetra bibendum odio pellente.',
            ]
        ], ['field_name', 'field_type', 'field_value']);
    }
}
