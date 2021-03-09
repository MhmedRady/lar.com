<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'admins';
    protected $fillable = ['name','email','img','password','created_at','updated_at'];
    protected $hidden = ['password','remember_token',];
}
