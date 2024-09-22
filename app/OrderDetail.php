<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table='order_details';
    protected $primaryKey='id';
    protected $fillable=['order_id', 'product', 'qty', 'price', 'montant'];
}
