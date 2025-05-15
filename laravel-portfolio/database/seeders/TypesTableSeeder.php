<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
    [
        'name' => 'Front-end Development',
        'description' => 'Sviluppo di interfacce utente interattive e responsive per applicazioni web, focalizzandosi sull\'esperienza utente e sull\'aspetto visivo.',
    ],
    [
        'name' => 'Back-end Development',
        'description' => 'Sviluppo della logica del server, gestione dei database e creazione di API per supportare le funzionalità delle applicazioni web e mobile.',
    ],
    [
        'name' => 'Full-stack Development',
        'description' => 'Competenze complete nello sviluppo sia del front-end che del back-end, in grado di gestire l\'intero ciclo di vita di un\'applicazione.',
    ],
    [
        'name' => 'Mobile Development',
        'description' => 'Sviluppo di applicazioni per dispositivi mobili, sia su piattaforme native (iOS, Android) che con framework cross-platform.',
    ],
    [
        'name' => 'Data Science',
        'description' => 'Analisi di dati complessi, applicazione di tecniche di machine learning e creazione di visualizzazioni per estrarre informazioni significative e prendere decisioni informate.',
    ],
    [
        'name' => 'UI/UX Design',
        'description' => 'Progettazione di interfacce utente intuitive ed efficaci, focalizzandosi sull\'esperienza dell\'utente, l\'usabilità e l\'accessibilità.',
    ],
];

        foreach ($types as $type){
            $newType = new Type();

            $newType->name = $type['name'];
            $newType->description = $type['description'];

            $newType->save();
        }
        
    }
}
