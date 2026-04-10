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
        // -----//----------------------------------------------
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

                'personnel_number' => '01',
                'surname' => 'Matengu',
                'full_name'  => 'Professor Kenneth',
                'email'      => 'vc@unam.na',
                'faculty' => 'Computer Science',
                'job_title'  => '+264 61 206 3111',
                'department' => 'IT Business Analyst',
                'is_active'  => true,
            ],
            [
                
                'personnel_number' => '02',
                'full_name'  => 'Dr. Frednard Gideon',
                'position'   => 'Deputy Vice-Chancellor: Academic Affairs',
                'email'      => 'dvcaa@unam.na',
                'telephone'  => '+264 61 206 3112',
                'department' => 'Office of the Vice-Chancellor',
                'is_active'  => true,
            ],
            [   
                 'personnel_number' => '03',
                'full_name'  => 'Ms. Selma Shikongo',
                'position'   => 'Director: Human Resources',
                'email'      => 's.shikongo@unam.na',
                'telephone'  => '+264 61 206 3200',
                'department' => 'Human Resources',
                'is_active'  => true,
            ],
            [   
                'personnel_number' => '05',
                'surname' => 'Hamunyela',
                'full_name'  => 'Mr. Thomas',
                'job_title'   => 'HR Officer',
                'email'      => 't.hamunyela@unam.na',
                'telephone'  => '+264 61 206 3205',
                'department' => 'Human Resources',
                'is_active'  => true,
            ],
            [    
                'personnel_number' => '06',
                'surname' => 'Nghifikepunye',
                'full_name'  => 'Ms. Anna',
                'job_title'   => 'Director: ICT Services',
                'email'      => 'a.nghifikepunye@unam.na',
                'faculty'  => 'Comuter Science',
                'department' => 'ICT Services',
                'is_active'  => true,
            ],
            [   'personnnel_number' => '09',
                'surname' => 'Nankela',
                'full_name'  => 'Mr. David',
                'job_title'   => 'Systems Administrator',
                'email'      => 'd.nankela@unam.na',
                'faculty'  => 'Engineering',
                'department' => 'ICT Services',
                'is_active'  => true,
            ],
            [   'personnel_number' => '10',
                'surname' => 'Amwele',
                'full_name'  => 'Dr. Hilma',
                'job_title'   => 'Senior Lecturer',
                'email'      => 'h.amwele@unam.na',
                'faculty'  => 'Health Science',
                'department' => 'Faculty of Health Sciences & Veterinary Medicine',
                'is_active'  => true,
            ],
            [   'personnel_number' => '08',
                'surname' => 'Kamati',
                'full_name'  => 'Prof. Reinhold',
                'Job_title'   => 'Dean of Faculty',
                'email'      => 'r.kamati@unam.na',
                'faculty'  => 'Science And Technology',
                'department' => 'Faculty of Science, Technology & Engineering',
                'is_active'  => true,
            ],
            [   'personnel_number' => '07',
                'surname' => 'Nakale',
                'full_name'  => 'Ms. Grace',
                'job_title'   => 'Finance Officer',
                'email'      => 'g.nakale@unam.na',
                'faculty'  => 'Finance',
                'department' => 'Finance & Administration',
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