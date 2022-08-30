<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FightHero extends Model
{
    protected $table = 'fight_heros';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fight_id',
        'hero_id',
        'power',
        'type',
    ];
}
