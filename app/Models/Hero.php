<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heros';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'image',
    ];
}
