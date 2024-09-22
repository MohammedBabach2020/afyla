<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='address';
    protected $primaryKey='id';
    protected $fillable=['user_id', 'name', 'lastname', 'address','city','zip','state','country','phone','defaulte'];
    public $timestamps = false;
}
