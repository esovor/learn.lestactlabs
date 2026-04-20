<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         $subjects = json_decode(file_get_contents(database_path('json/subjects.json')));
         $subjects = collect($subjects);
         $subjects->each(function ($subject) {
             Subject::create([
                 'sequence_number' => $subject->sequence_number,
                 'subject_id' => $subject->subject_id,
                 'class_level_id' => $subject->class_level_id,
                 'name' => $subject->name,
                 'description' => $subject->description,
             ]);
         });
    }
}
