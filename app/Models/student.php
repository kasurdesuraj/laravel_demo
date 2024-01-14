<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_no',
        'email',
        'address',
    ];

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'mobile_no' => 'required|string|max:255',
        'email' => 'required|email|unique:students|max:255',
        'address' => 'required|string|max:255',
    ];

    // Add any additional methods or relationships here
}
