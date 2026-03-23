<?php

// ============================================================
// DATABASE SEEDER
// File: database/seeders/EmployeeSeeder.php
//
// A seeder populates your database with sample/test data.
// This is incredibly useful during development so you have
// real-looking data to work with immediately.
//
// To run this seeder:
//   php artisan db:seed --class=EmployeeSeeder
//
// To reset and re-seed everything:
//   php artisan migrate:fresh --seed
// ============================================================

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        // ---------------------------------------------------
        // Employee::truncate() deletes ALL rows from the table
        // before seeding. This prevents duplicate entries if
        // you run the seeder more than once.
        // ---------------------------------------------------
        Employee::truncate();

        // ---------------------------------------------------
        // Sample employee data for UNAM.
        // Replace these with real data or connect to your
        // existing HR system later.
        // ---------------------------------------------------
        $employees = [
            [
                'full_name'  => 'Professor Kenneth Matengu',
                'position'   => 'Vice-Chancellor',
                'email'      => 'vc@unam.na',
                'telephone'  => '+264 61 206 3111',
                'department' => 'Office of the Vice-Chancellor',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Dr. Frednard Gideon',
                'position'   => 'Deputy Vice-Chancellor: Academic Affairs',
                'email'      => 'dvcaa@unam.na',
                'telephone'  => '+264 61 206 3112',
                'department' => 'Office of the Vice-Chancellor',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Ms. Selma Shikongo',
                'position'   => 'Director: Human Resources',
                'email'      => 's.shikongo@unam.na',
                'telephone'  => '+264 61 206 3200',
                'department' => 'Human Resources',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Mr. Thomas Hamunyela',
                'position'   => 'HR Officer',
                'email'      => 't.hamunyela@unam.na',
                'telephone'  => '+264 61 206 3205',
                'department' => 'Human Resources',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Ms. Anna Nghifikepunye',
                'position'   => 'Director: ICT Services',
                'email'      => 'a.nghifikepunye@unam.na',
                'telephone'  => '+264 61 206 3300',
                'department' => 'ICT Services',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Mr. David Nankela',
                'position'   => 'Systems Administrator',
                'email'      => 'd.nankela@unam.na',
                'telephone'  => '+264 61 206 3310',
                'department' => 'ICT Services',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Dr. Hilma Amwele',
                'position'   => 'Senior Lecturer',
                'email'      => 'h.amwele@unam.na',
                'telephone'  => '+264 61 206 4100',
                'department' => 'Faculty of Health Sciences & Veterinary Medicine',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Prof. Reinhold Kamati',
                'position'   => 'Dean of Faculty',
                'email'      => 'r.kamati@unam.na',
                'telephone'  => '+264 61 206 4000',
                'department' => 'Faculty of Science, Technology & Engineering',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Ms. Grace Nakale',
                'position'   => 'Finance Officer',
                'email'      => 'g.nakale@unam.na',
                'telephone'  => '+264 61 206 3400',
                'department' => 'Finance & Administration',
                'is_active'  => true,
            ],
            [
                'full_name'  => 'Mr. Joel Haindongo',
                'position'   => 'Senior Librarian',
                'email'      => 'j.haindongo@unam.na',
                'telephone'  => '+264 61 206 3500',
                'department' => 'Library & Information Services',
                'is_active'  => true,
            ],
        ];

        // ---------------------------------------------------
        // Loop through the array and create each employee.
        // Employee::create() inserts one row into the database.
        // The foreach loop repeats the create() for each item.
        // ---------------------------------------------------
        foreach ($employees as $data) {
            Employee::create($data);
        }

        // Output a message to the terminal to confirm seeding worked
        $this->command->info('✓ Seeded ' . count($employees) . ' employees successfully.');
    }
}