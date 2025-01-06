<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Beginner', 'Elementary', 'Comp5', 'Comp9', 'Comp10'] as $obj) {
            Course::create(['name' => $obj]);
        }
    }
}
