<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    //
    protected $fillable = ['updated_at'];

    public function time{
        return $this->belongsTo(App::class,'member_id');
    }
}

