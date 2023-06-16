<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    protected $fillable = [
        'employee_id',
        'full_name',
        'job_title',
        'department',
        'business_unit',
        'gender',
        'ethnicity',
        'age',
        'hire_date',
        'annual_salary',
        'bonus',
        'country',
        'city',
        'exit_date',
    ];
}
