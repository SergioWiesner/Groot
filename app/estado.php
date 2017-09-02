<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    public $timestamps = false;
    protected $table = 'estado';
    protected $fillable = ['idEstado', 'NombrEstado'];
}
