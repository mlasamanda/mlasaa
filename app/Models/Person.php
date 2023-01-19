<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
    'fname',
    'lname',
    'gender',
    'nation',
    'dob',
    'mobile'
    
];
}
