<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FightType extends Model
{
    protected $table = 'fight_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];
}
