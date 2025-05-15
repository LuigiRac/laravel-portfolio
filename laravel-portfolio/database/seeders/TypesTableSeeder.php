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
                'name' => 'Laravel',
                'description' => 'Framework PHP moderno e potente per lo sviluppo rapido di applicazioni web.',
            ],
            [
                'name' => 'MySQL',
                'description' => 'Sistema di gestione di database relazionale open-source ampiamente utilizzato per archiviare e gestire dati in modo efficiente e scalabile.',
            ],
            [
                'name' => 'PHP',
                'description' => 'Linguaggio di scripting lato server versatile e popolare, fondamentale per lo sviluppo web dinamico e la creazione di applicazioni backend.',
            ],
            [
                'name' => 'React',
                'description' => 'Libreria JavaScript per la costruzione di interfacce utente interattive e dinamiche, focalizzata sulla creazione di componenti riutilizzabili.',
            ],
            [
                'name' => 'JavaScript',
                'description' => 'Linguaggio di scripting essenziale per lo sviluppo web frontend, che consente di aggiungere interattività, dinamicità e logica alle pagine HTML.',
            ],
            [
                'name' => 'HTML',
                'description' => 'Linguaggio di markup standard per la creazione della struttura e del contenuto delle pagine web.',
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
