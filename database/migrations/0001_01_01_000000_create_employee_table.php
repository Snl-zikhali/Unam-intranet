<?php

/**
 * MIGRATION: Create Employees Table
 * 
 * A migration is a version control system for your database.
 * It defines the structure of tables in a way that can be
 * applied or rolled back.
 * 
 * To run this migration:
 *   php artisan migrate
 * 
 * To undo this migration:
 *   php artisan migrate:rollback
 * 
 * To reset everything and re-run:
 *   php artisan migrate:fresh
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * RUN MIGRATION (CREATE TABLE)
     * 
     * This method runs when you execute: php artisan migrate
     * It creates the "employees" table with all the columns defined below.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            
            // ================================================================
            // PRIMARY KEY
            // ================================================================
            // $table->id()
            // Creates an "id" column that:
            //   - Auto-increments (1, 2, 3, 4...)
            //   - Is the primary key (unique identifier for each row)
            //   - Is unsigned (only positive numbers)
            //   - Is a big integer (supports very large numbers)
            $table->id();

            // ================================================================
            // EMPLOYEE IDENTIFICATION
            // ================================================================
            // Personnel number (unique ID like 12345, 67890)
            // ->unique() ensures no two employees have the same number
            // ->nullable(false) means this field is required
            $table->string('personnel_number')->unique();

            // ================================================================
            // NAME FIELDS
            // ================================================================
            // Last name (e.g., "Shikongo")
            $table->string('surname');

            // Full name (e.g., "John Shikongo")
            $table->string('fullname');

            // ================================================================
            // CONTACT INFORMATION
            // ================================================================
            // Email address
            // ->unique() ensures no two employees have the same email
            $table->string('email')->unique();

            // ================================================================
            // EMPLOYMENT DETAILS
            // ================================================================
            // Job title/position (e.g., "Senior Lecturer", "Administrator")
            $table->string('job_title');

            // Faculty the employee belongs to (e.g., "Science", "Engineering")
            $table->string('faculty');

            // Department within the faculty (e.g., "Computer Science", "HR")
            $table->string('department');

            // ================================================================
            // STATUS
            // ================================================================
            // Is this employee currently active?
            // true = active, false = inactive (left the university)
            // ->default(true) means new employees are active by default
            $table->boolean('is_active')->default(true);

            // ================================================================
            // TIMESTAMPS
            // ================================================================
            // $table->timestamps()
            // Creates TWO columns automatically:
            //   - created_at: when this record was first created
            //   - updated_at: when this record was last modified
            // 
            // Laravel handles these automatically. You never set them manually.
            // Example: When you do Employee::create(...), created_at is auto-filled.
            $table->timestamps();
        });
    }

    /**
     * ROLLBACK MIGRATION (DROP TABLE)
     * 
     * This method runs when you execute: php artisan migrate:rollback
     * It destroys the "employees" table (removes it completely from database).
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};