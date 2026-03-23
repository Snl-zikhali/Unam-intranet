<?php

// ============================================================
// DATABASE MIGRATION
// File: database/migrations/xxxx_xx_xx_create_employees_table.php
//
// A migration is a PHP file that tells Laravel how to create
// (or destroy) a database table. Instead of writing SQL by
// hand, you describe the table in PHP and Laravel handles it.
//
// To run this migration:  php artisan migrate
// To undo it:             php artisan migrate:rollback
// ============================================================

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Every migration has two methods:
//   up()   → runs when you migrate   (creates the table)
//   down() → runs when you rollback  (drops the table)

return new class extends Migration
{
    /**
     * Run the migrations — CREATE the employees table.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {

            // ---------------------------------------------------
            // $table->id()
            // Creates an auto-incrementing integer column called "id".
            // Every row gets a unique number (1, 2, 3...) automatically.
            // This is the PRIMARY KEY — the unique identifier for each record.
            // ---------------------------------------------------
            $table->id();

            // ---------------------------------------------------
            // $table->string('column_name')
            // Creates a VARCHAR column — stores text up to 255 characters.
            // Perfect for names, emails, positions etc.
            // ---------------------------------------------------
            $table->string('full_name');

            // The employee's job title e.g. "Senior Lecturer", "IT Administrator"
            $table->string('position');

            // ->unique() ensures no two employees can share the same email
            $table->string('email')->unique();

            // Telephone — nullable() means this field is optional (can be empty)
            $table->string('telephone')->nullable();

            // Department name e.g. "Human Resources", "ICT Services"
            $table->string('department');

            // ---------------------------------------------------
            // $table->boolean('is_active')->default(true)
            // Stores true/false. Default true = employee is active.
            // When someone leaves UNAM, set to false instead of deleting.
            // This is called "soft visibility" — data is kept but hidden.
            // ---------------------------------------------------
            $table->boolean('is_active')->default(true);

            // ---------------------------------------------------
            // $table->timestamps()
            // Automatically creates TWO columns:
            //   created_at  → when the record was first inserted
            //   updated_at  → when the record was last changed
            // Laravel manages these automatically — you never set them manually.
            // ---------------------------------------------------
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations — DROP the employees table.
     * This is the exact opposite of up().
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};