<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
protected $fillable = ['full_name', 'department', 'position', 'email', 'tell', 'is_active',];


 protected $hidden = [
        // Add any fields here that shouldn't be exposed via API
    ];

    
    protected $casts = [
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
