<?php

// ============================================================
// ELOQUENT MODEL
// File: app/Models/Employee.php
//
// A Model is a PHP class that represents ONE TABLE in your
// database. Each instance of this class = one row in the table.
//
// Laravel's ORM (Object Relational Mapper) is called Eloquent.
// It lets you query the database using PHP instead of raw SQL.
//
// Example:
//   Employee::all()              → SELECT * FROM employees
//   Employee::find(5)            → SELECT * FROM employees WHERE id = 5
//   Employee::where('dept','HR') → SELECT * FROM employees WHERE department = 'HR'
// ============================================================

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    // ---------------------------------------------------
    // $table
    // Tells Eloquent which database table this model uses.
    // By convention Laravel assumes the plural snake_case of
    // the class name (Employee → employees), so this line is
    // optional here but it's good practice to be explicit.
    // ---------------------------------------------------
    protected $table = 'employees';

    // ---------------------------------------------------
    // $fillable
    // A security feature called "Mass Assignment Protection".
    // Only the columns listed here can be written to via
    // create() or update(). This prevents a malicious user
    // from injecting unexpected fields into your database.
    //
    // Example of what this prevents:
    //   A hacker sends: { "full_name": "Hacker", "is_admin": true }
    //   Without $fillable, "is_admin" might get saved.
    //   With $fillable, only the listed columns are accepted.
    // ---------------------------------------------------
    protected $fillable = [
        'full_name',
        'position',
        'email',
        'telephone',
        'department',
        'is_active',
    ];

    // ---------------------------------------------------
    // $casts
    // Tells Laravel how to convert database values to PHP types.
    // The database stores booleans as 0 or 1 (integers).
    // With this cast, PHP will receive true/false instead.
    // ---------------------------------------------------
    protected $casts = [
        'is_active' => 'boolean',
    ];

    // ---------------------------------------------------
    // $hidden
    // These fields will NEVER appear in API responses.
    // Even if someone calls ->toArray() or ->toJson(),
    // hidden fields are excluded. Good for sensitive data.
    // ---------------------------------------------------
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // ============================================================
    // QUERY SCOPES
    // Scopes are reusable query filters you define once and
    // use anywhere. They always start with "scope" followed
    // by the scope name. You call them without "scope":
    //   Employee::active()->get()
    // ============================================================

    /**
     * Scope: only return employees who are currently active.
     * Usage: Employee::active()->get()
     */
    public function scopeActive($query)
    {
        // WHERE is_active = 1
        return $query->where('is_active', true);
    }

    /**
     * Scope: search by name OR department.
     * The LIKE operator with % wildcards searches for partial matches.
     *
     * Example: search("john") will match "John Shikongo", "Johnathan Nambala"
     * Example: search("ICT")  will match "ICT Services", "ICT Support"
     *
     * Usage: Employee::active()->search('john')->get()
     */
    public function scopeSearch($query, string $term)
    {
        // Wrap the term in % wildcards for partial matching
        // "john" becomes "%john%" which matches anywhere in the string
        $like = '%' . $term . '%';

        return $query->where(function ($q) use ($like) {
            $q->where('full_name',   'LIKE', $like)  // Match name
              ->orWhere('department','LIKE', $like);  // OR match department
        });
    }

    /**
     * Scope: filter by exact department name.
     * Usage: Employee::active()->inDepartment('Human Resources')->get()
     */
    public function scopeInDepartment($query, string $department)
    {
        return $query->where('department', $department);
    }
}