<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    protected $fillable = [
        'username', 'message'
    ];
}
