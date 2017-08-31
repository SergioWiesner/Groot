<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usu extends Model
{   public $timestamps = false;
    protected $table = 'users';
    protected $fillable = ['Identificador', 'user', 'password', 'IdPer'];
}
