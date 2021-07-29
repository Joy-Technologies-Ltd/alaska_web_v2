<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'iso_639-1',
    ];

    protected $table = 'languages';
}
