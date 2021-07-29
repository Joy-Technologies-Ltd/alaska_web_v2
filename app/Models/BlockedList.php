<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BlockedList extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'contect_id',
        'created_by',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table = 'blocked_lists';
}
