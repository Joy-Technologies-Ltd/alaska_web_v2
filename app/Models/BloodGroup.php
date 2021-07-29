<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{

    use SoftDeletes;
    
    protected $fillable = [
        'blood_group_name',
        'status',
        'created_by',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table = 'blood_groups';
}
