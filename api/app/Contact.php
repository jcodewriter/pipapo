<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'address', 'phone', 'email', 'website', 'payment_methods', 'open', 'close', 'directions', 'handicapped_accessible', 'tables', 'parking', 'smoking_area'
    ];
}