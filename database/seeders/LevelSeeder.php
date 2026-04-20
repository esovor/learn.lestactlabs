<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Testing\File;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = json_decode(file_get_contents(database_path('json/levels.json')));
        $levels = collect($levels);
        $levels->each(function ($level) {
            Level::create([
                'sequence_number' => $level->sequence_number,
                'level_id' => $level->level_id,
                'name' => $level->name,
                'description' => $level->description,
            ]);
        });


    }
}
