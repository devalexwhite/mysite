<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyValueStore extends Model
{
    protected $primaryKey = 'key';
    protected $fillable = [
        'key',
        'value',
    ];
}
