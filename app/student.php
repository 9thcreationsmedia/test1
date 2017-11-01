<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';

    public function classtable()
    {
        return $this->belongsTo('App\classtable');
    }

    public function section()
    {
        return $this->belongsTo('App\section');
    }
}
