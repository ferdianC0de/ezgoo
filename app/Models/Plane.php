<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable = ['plane_name','eco_seat','bus_seat'];
}
