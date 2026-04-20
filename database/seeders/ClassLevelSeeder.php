<?php

namespace Database\Seeders;

use App\Models\ClassLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ClassLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classLevels = json_decode(file_get_contents(database_path('json/classLevel.json')));
        $classLevels = collect($classLevels);
        $classLevels->each(function ($classLevel) {
            ClassLevel::create([
                'sequence_number' => $classLevel->sequence_number,
                'class_level_id' => $classLevel->class_level_id,
                'level_id' => $classLevel->level_id,
                'name' => $classLevel->name,
                'description' => $classLevel->description,
            ]);
        });

    }
}
