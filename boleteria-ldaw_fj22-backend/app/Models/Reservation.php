<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\User','foreign_key_of_user');
    }

    public function event()
    {
        return $this->belongsTo('App\Event','foreign_key_of_item');
    }
}
