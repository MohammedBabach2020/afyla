<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishModel extends Model
{
    protected $table='wishlist';
    protected $primaryKey='id';
    protected $fillable=['name', 'price', 'prodId', 'UserId'];
    public $timestamps = false;
}


