<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use Notifiable;


    protected $table='admin';



    protected $fillable = [
        'email', 'password'
    ];


    protected $hidden = [
        'password'
    ];




    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

}
