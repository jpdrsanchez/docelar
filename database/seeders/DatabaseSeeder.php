<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutPage;
use App\Models\Config;
use App\Models\ContactPage;
use App\Models\DonatePage;
use App\Models\EventsPage;
use App\Models\HomePage;
use App\Models\ProjectsPage;
use App\Models\TalksPage;
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

        HomePage::create([
            'title_seo' => 'Home | Doce Lar da Criança',
            'description_seo' => 'Homepage do site Doce Lar da Criança',
            'about_title' => 'Sobre',
            'about_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque faucibus risus et sem libero. Dolor in porttitor nisi a commodo neque, tortor lobortis sit. Mi egestas suspendisse enim eros leo gravida viverra. Nulla aliquam ultricies in amet dui, morbi mi posuere. Quam morbi sit quis enim vestibulum at. At ac iaculis sagittis, adipiscing eget duis egestas pulvinar venenatis.',
            'projects_title' => 'Projetos',
            'projects_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque.',
            'talks_title' => 'Palestras',
            'talks_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque. purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque.',
            'donate_title' => 'Contribua com as Doações',
            'donate_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor integer mauris nibh fringilla. Ornare dictumst aliquam purus semper mattis molestie viverra tellus lacinia. Pharetra lectus vestibulum lacus scelerisque duis hendrerit. Risus neque tellus scelerisque faucibus risus et sem libero. Dolor in porttitor nisi a commodo neque, tortor lobortis sit. Risus neque tellus scelerisque faucibus risus et sem libero. Dolor in porttitor nisi a commodo neque, tortor lobortis sit.',
            'schedule_title' => 'Agenda',
            'schedule_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo tincidunt massa tortor.',
            'schedule_weekdays_opening' => 'Segunda a Sexta das 9:00h até 21:00h',
            'schedule_weekeend_opening' => 'Sábado e Domingo das 9:00h até 18:00'
        ]);

        AboutPage::create([
            'title_seo' => 'Sobre | Doce Lar da Criança',
            'description_seo' => 'Página sobre do site Doce Lar da Criança',
            'title' => 'Nossa História',
            'subtitle' => 'Sobre',
            'content' => 'Content'
        ]);

        DonatePage::create([
            'title_seo' => 'Doações | Doce Lar da Criança',
            'description_seo' => 'Página de doações do site Doce Lar da Criança',
            'title' => 'Faça uma doação para nos ajudar',
            'subtitle' => 'Doações',
            'content' => 'Content',
            'donate_title' => 'Cada centavo conta',
            'donate_content' => 'Content',
        ]);

        ContactPage::create([
            'title_seo' => 'Contato | Doce Lar da Criança',
            'description_seo' => 'Página de contato do site Doce Lar da Criança',
            'title' => 'Contato',
            'content' => 'Content',
            'form_title' => 'Fale Conosco',
        ]);

        EventsPage::create([
            'title_seo' => 'Eventos | Doce Lar da Criança',
            'description_seo' => 'Página de eventos do site Doce Lar da Criança',
        ]);

        ProjectsPage::create([
            'title_seo' => 'Projetos | Doce Lar da Criança',
            'description_seo' => 'Página de projetos do site Doce Lar da Criança',
        ]);

        TalksPage::create([
            'title_seo' => 'Palestras | Doce Lar da Criança',
            'description_seo' => 'Página de Palestras do site Doce Lar da Criança',
            'form_title' => 'Sugestões de Palestras',
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