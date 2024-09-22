<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table='infos';
    protected $primaryKey='id';
    protected $fillable=['address','phone','email'];
}
