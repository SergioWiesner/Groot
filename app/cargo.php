<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{   public $timestamps = false;
    protected $table = 'cargo';
    protected $fillable = ['Cargo', 'Nomcargo', ''];
}
