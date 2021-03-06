<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheidsrechter extends Model
{
    use HasFactory;

    public function wedstrijden()
    {
        return $this->hasMany(Match::class, 'scheidsrechter_id');
    }

    public function scheidsrechter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
