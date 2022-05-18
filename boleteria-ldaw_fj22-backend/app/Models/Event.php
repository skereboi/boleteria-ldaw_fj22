<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany('App/Reservation','foreign_key');
    }

    public function owners()
    {
        return $this->belongsToMany(User::class)->withPivot('id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('id');
    }
}
