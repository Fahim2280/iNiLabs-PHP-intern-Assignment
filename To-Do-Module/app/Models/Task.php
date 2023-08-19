<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'completed'];

    // Other model properties and methods

    // Example accessor method
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
}