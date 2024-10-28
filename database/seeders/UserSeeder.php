<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 2 admin users
        for ($i = 0; $i < 2; $i++) {
            DB::table('users')->insert([
                'name' => 'Admin ' . Str::random(5),
                'email' => 'admin' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'phone_number' => '98000000' . $i,
            ]);
        }

        // Create 10 student users
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => 'Student ' . Str::random(5),
                'email' => 'student' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'student',
                'student_id' => 'STU' . Str::random(5),
                'school_name' => 'School ' . Str::random(5),
                'grade' => 'Grade ' . rand(1, 12),
                'section' => chr(rand(65, 68)), // Random section A-D
                'date_of_birth' => now()->subYears(rand(10, 20))->toDateString(),
                'address' => 'Address ' . Str::random(5),
                'parents_phone_number' => '98412345' . rand(10, 99),
                'parents_email' => 'parent' . $i . '@example.com',
                'phone_number' => '98012345' . $i,
            ]);
        }

        // Create 10 teacher users
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => 'Teacher ' . Str::random(5),
                'email' => 'teacher' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'teacher',
                'teacher_id' => 'TCH' . Str::random(5),
                'subject_expert' => 'Subject ' . Str::random(5),
                'phone_number' => '98123456' . $i,
            ]);
        }
    }
}
