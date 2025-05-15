<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $technologies = [
    [
        'name' => 'Python',
        'color' => '#3776AB',
    ],
    [
        'name' => 'JavaScript',
        'color' => '#F7DF1E',
    ],
    [
        'name' => 'HTML5',
        'color' => '#E34F26',
    ],
    [
        'name' => 'CSS3',
        'color' => '#1572B6',
    ],
     [
        'name' => 'PHP',
        'color' => '#777BB4',
    ],
    [
        'name' => 'Laravel',
        'color' => '#FF2D20',
    ],
    [
        'name' => 'React',
        'color' => '#61DAFB',
    ],
    [
        'name' => 'Node.js',
        'color' => '#339933',
    ],
];
    
    foreach ($technologies as $technology) {
        $newTechnology = new Technology();

        $newTechnology->name = $technology['name'];
        $newTechnology->color = $technology['color'];
        
        $newTechnology->save();
    }
    }
}
