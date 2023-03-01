<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Seed the students table with sample data
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'phone' => $faker->phoneNumber,
                // 'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
