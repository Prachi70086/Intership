<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'institution',
        'degree',
        'major',
        'department',
        'duration',
        'start_date',
        'internship_type',
        'skills',
        'motivation',
        'resume',
    ];
}