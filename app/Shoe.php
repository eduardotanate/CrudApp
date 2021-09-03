<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $table = 'shoe';
    protected $fillable = ['type','brand','size','limited'];
    public $timestamps = false;
}
