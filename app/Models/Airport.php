<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //
    protected $table = 'airports';
    protected $fillable = ['id','airport_name', 'code','city'];
}
