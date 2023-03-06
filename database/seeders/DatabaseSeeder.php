<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; //
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Method 1 - Seed the users table using models
        \App\Models\User::factory(5)->create(); //10 random data

        // \App\Models\User::factory()->create([ //specific data
        //     'name' => 'Test User 3',
        //     'email' => 'test1212312312@example.com',
        // ]);

        // // Method 2 - Seed the reservations table with sample data using Facades DB
        // DB::table('users')->insert([
        //     [
        //         'name' => 'John Doe',
        //         'email' => 'johndoe@example.com',
        //         'password' => Hash::make('password123'),
        //         // 'phone' => '555-1234',
        //         // 'date' => '2023-03-01',
        //         // 'time' => '19:00:00',
        //         // 'num_people' => 2,
        //         // 'message' => 'This is a sample reservation.',
        //         // 'created_at' => now(),
        //         // 'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Jane Smith',
        //         'email' => 'janesmith@example.com',
        //         'password' => Hash::make('password123'),
        //         // 'phone' => '555-5678',
        //         // 'date' => '2023-03-02',
        //         // 'time' => '20:30:00',
        //         // 'num_people' => 4,
        //         // 'message' => 'We are celebrating a birthday.',
        //         // 'created_at' => now(),
        //         // 'updated_at' => now(),
        //     ],
        //     // Add more sample reservations here...
        // ]);

       

        // // Method 3 - Seed the reservations table with 50 random reservations
        // $faker = Faker::create();
        
        // for ($i = 0; $i < 50; $i++) {
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => Hash::make($faker->password()),
        //         // 'phone' => $faker->phoneNumber,
        //         // 'date' => $faker->date(),
        //         // 'time' => $faker->time(),
        //         // 'message' => $faker->sentence(),
        //         // 'num_people' => $faker->numberBetween(1, 10),
        //         // 'created_at' => now(),
        //         // 'updated_at' => now(),
        //     ]);
        // }

        //Seed StudentsTableSeeder
        $this->call(StudentsTableSeeder::class);

    }
}
