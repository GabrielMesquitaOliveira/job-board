<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobBoard extends Model
{
    /** @use HasFactory<\Database\Factories\JobBoardFactory> */
    use HasFactory;

    use HasFactory;

    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $category = [
        'IT',
        'Finance',
        'Sales',
        'Marketing'
    ];

}
