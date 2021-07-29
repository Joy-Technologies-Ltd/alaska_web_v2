<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExperience extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'designation',
        'company_name',
        'company_logo',
        'company_address',
        'description',
        'current_working_status',
        'start_date',
        'end_date',
        'status',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table = 'job_experiences';
}
