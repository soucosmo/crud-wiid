<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    function state()
    {
        return $this->belongsTo(State::class);
    }
}
