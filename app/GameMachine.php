<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameMachine extends Model
{
    protected $fillable = [
        'name', 'serial_number', 'end_of_guarantee_date', 'game_type_id'
    ];

    public function gameType()
    {
        return $this->belongsTo('App\GameType');
    }
}
