<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['first_name', 'last_name', 'email', 'phone', 'date_of_birth', 'course'])]
class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $casts = [
        'date_of_birth' => 'date',
    ];
}
