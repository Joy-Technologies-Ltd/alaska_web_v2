<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessengerFile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'messenger_id',
        'file_name',
        'file_real_name',
        'file_type_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table = 'messenger_files';
}
