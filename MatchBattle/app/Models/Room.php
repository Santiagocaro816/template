<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'room';

    protected $fillable = ['code','type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'room_id', 'id');
    }

}
