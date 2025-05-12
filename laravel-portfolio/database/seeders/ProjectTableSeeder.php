<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [

            [
                'name' => 'laravel-primi-passi', 
                'repo' => 'https://github.com/LuigiRac/laravel-primi-passi.git',
                'description' => 'I primissimi passi per configurare e avviare un progetto Laravel.',
                // 'type' => 'Laravel'
                
            ],

            [
                'name' => 'laravel-model-controller ', 
                'repo' => 'https://github.com/LuigiRac/laravel-model-controller' ,
                'description' => 'Esercizi pratici sull\'utilizzo dei Model e dei Controller in Laravel.',
                // 'type' => 'Laravel'
            ],

            [
                'name' => 'laravel-comics', 
                'repo' => 'https://github.com/LuigiRac/laravel-comics',
                'description' => 'Un progetto introduttivo per familiarizzare con le basi di Laravel',
                // 'type' => 'Laravel'
            ],
           
            [
                'name' => 'laravel-migration-seeder', 
                'repo' => 'https://github.com/LuigiRac/laravel-migration-seeder.git',
                'description' => 'Un focus sulla creazione e gestione di Migrations e Seeders in Laravel.',
                // 'type' => 'Laravel'
            ],
            
        ];

        foreach ($datas as $data) {
            $newProject = new Project();
            $newProject->name = $data['name'];
            $newProject->repo = $data['repo'];
            $newProject->description = $data['description'];
            // $newProject->type = $data['type'];

            $newProject->save();
        }
    }
}
