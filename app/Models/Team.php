<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class, 'team_id');
    }

    public function inschrijver()
    {
        return $this->belongsTo(User::class, 'ingeschreven_door');
    }
}
