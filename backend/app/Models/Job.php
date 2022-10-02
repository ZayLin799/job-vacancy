<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $fillable = [
        'position', 'job_description', 'job_requirements','location','required_employee'
    ];
}
