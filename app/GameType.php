<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function gameMachines()
    {
        return $this->hasMany('App\GameMachine');
    }
}
