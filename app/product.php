<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $fillable = ['name','details'];
}