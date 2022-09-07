<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soccer_players extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'speed',
        'endurance',
        'skill',
        'defending',
        'strong',
        'shoot',
        'img',
    ];
}
