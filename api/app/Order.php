<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'customer_id', 'comment', 'paymethod', 'transaction_id', 'location', 'products', 'customer', 'total_price'
    ];
}