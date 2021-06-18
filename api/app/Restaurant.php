<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'address', 'email', 'phone', 'website', 'open', 'close', 'seated_burst', 'guest_room', 'guest_garden', 'reviews', 'rate'
    ];
}