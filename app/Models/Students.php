<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'password',
        'district_id',
        'block_id',
        'college',
        'education_status',
        'address',
        'resume_path',
        'status',
    ];
}
