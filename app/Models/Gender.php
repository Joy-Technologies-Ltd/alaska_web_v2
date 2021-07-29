<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'gender_name',
        'status',
        'created_by',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table = 'genders';
}
