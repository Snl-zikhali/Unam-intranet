<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

   protected $fillable = [
    'personnel_number',
    'surname',
    'fullname',
    'email',
    'job_title',
    'faculty',
    'department',
    'is_active'
];
}