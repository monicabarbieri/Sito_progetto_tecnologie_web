<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        
        'user_id',
        'name',
        'people',
        'date',
        'time',
        'green_pass',
        'meat_menu',
        'fish_menu',
        'vegetarian_menu',
        'vegan_menu',
        'child_menu',
        'request',
        'event_id'

    ];

    public function user() {
        return $this->belongsTo('App\User');
    }


    public function event() {
        return $this->belongsTo('App\Event');
    }
    }

    