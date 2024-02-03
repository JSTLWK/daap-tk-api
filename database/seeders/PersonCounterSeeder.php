<?php

namespace Database\Seeders;

use App\Models\PersonCounter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonCounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonCounter::updateOrCreate([
            'id' => 1,
        ],
        [
            'name' => "Lucas Leuter",
            'team_kills' => 0,
        ]);

        PersonCounter::updateOrCreate([
            'id' => 2,
        ],
        [
            'name' => "070smack (Ryan)",
            'team_kills' => 0,
        ]);

    
        
        PersonCounter::updateOrCreate([
            'id' => 3,
        ],
        [
            'name' => "Gallak",
            'team_kills' => 0,
        ]);

        
        PersonCounter::updateOrCreate([
            'id' => 4,
        ],
        [
            'name' => "Jaap",
            'team_kills' => 0,
        ]);
        
        
        PersonCounter::updateOrCreate([
            'id' => 5,
        ],
        [
            'name' => "Maulli",
            'team_kills' => 0,
        ]);
        
        
        PersonCounter::updateOrCreate([
            'id' => 6,
        ],
        [
            'name' => "Superwous (Otis)",
            'team_kills' => 0,
        ]);
        
        PersonCounter::updateOrCreate([
            'id' => 7,
        ],
        [
            'name' => "Kevin (Belg)",
            'team_kills' => 0,
        ]);

        
        PersonCounter::updateOrCreate([
            'id' => 8,
        ],
        [
            'name' => "Yannick",
            'team_kills' => 0,
        ]);

        
        
        PersonCounter::updateOrCreate([
            'id' => 9,
        ],
        [
            'name' => "Mr. King",
            'team_kills' => 0,
        ]);
    }
}
