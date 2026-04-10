<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * EMPLOYEE MODEL
 * 
 * This model represents an employee in the UNAM Intranet system.
 * It connects to the "employees" database table and provides
 * methods to query and manipulate employee data.
 */
class Employee extends Model
{
    // ============================================================
    // TABLE NAME
    // ============================================================
    // By default, Laravel looks for a table named "employees" (plural).
    // Since our model is "Employee" (singular), we don't NEED to
    // specify the table name. But we do it for clarity.
    protected $table = 'employees';

    // ============================================================
    // FILLABLE FIELDS
    // ============================================================
    // These are the database columns that can be mass-assigned.
    // This prevents accidental modification of sensitive fields.
    // 
    // When you do: Employee::create(['name' => 'John', ...])
    // Only these fields will be allowed.
    protected $fillable = [
        'personnel_number',  // Unique employee ID (e.g., 12345)
        'surname',           // Last name
        'fullname',          // First name + last name
        'email',             // Email address
        'job_title',         // Position/role (Senior Lecturer, Admin, etc.)
        'faculty',           // Faculty name (Science, Engineering, etc.)
        'department',        // Department (Computer Science, HR, etc.)
        'is_active',         // Whether employee is active (true/false)
    ];

    // ============================================================
    // HIDDEN FIELDS
    // ============================================================
    // These fields won't appear in JSON responses.
    // Useful for hiding sensitive data like passwords.
    protected $hidden = [
        // Add any fields here that shouldn't be exposed via API
    ];

    // ============================================================
    // CASTING
    // ============================================================
    // Convert database values to specific PHP types.
    // is_active is stored as 0/1 but we want it as true/false.
    protected $casts = [
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}