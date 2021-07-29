<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'contact_id',
        'sent_message',
        'received_message',
        'image_status',
        'file_status',
        'seen_status',
        'status',
        'seen_date_time',
        'created_by',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    protected $table = 'messengers';
}
