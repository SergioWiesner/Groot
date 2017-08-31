<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{   public $timestamps = false;
    protected $table = 'personas';
    protected $fillable = ['IdentificadorPersona', 'Nombres', 'correo', 'Telefono', 'Cargo'];
}
