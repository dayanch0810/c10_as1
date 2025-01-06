<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CourseSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(SeasonSeeder::class);

        Student::factory(100)->create();
        Teacher::factory(10)->create();
        Lesson::factory(30)->create();
        Registration::factory(200)->create();
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
