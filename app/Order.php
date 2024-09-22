<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $primaryKey='id';
    protected $fillable=['client_name', 'client_phone', 'address', 'city', 'montant', 'etat'];
}
