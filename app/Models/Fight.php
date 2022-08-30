<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    protected $table = 'fights';
    protected $primaryKey = 'id';
    protected $fillable = [
        'attack_code',
        'attack_power',
        'protected_code',
        'protected_power',
        'fight_type',
        'comment',
        'user_id',
    ];
}
