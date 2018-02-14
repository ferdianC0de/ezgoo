<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Illuminate\Contracts\Auth\Authenticatable as Contract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable implements Contract{
    use Notifiable;
    use EntrustUserTrait; // add Entrust Package

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','title', 'first_name', 'last_name','email', 'password','verification',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','verification',
    ];
}
