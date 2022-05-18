<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany('App/Reservation','foreign_key');
    }

    public function preferences()
    {
        return $this->belongsToMany(Category::class)->withPivot('id');
    }

    public function eventsOrganized()
    {
        return $this->belongsToMany(Event::class)->withPivot('id');
    }
}
