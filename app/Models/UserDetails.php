<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'date_of_birth',
        'age',
        'blood_group_id',
        'gender',
        'address',
        'country_id',
        'default_language_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table ='user_details';
    
}
