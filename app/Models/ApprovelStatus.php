<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ApprovelStatus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'approval_status',
        'status',
        'created_by',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table = 'approvel_statuses';
}
