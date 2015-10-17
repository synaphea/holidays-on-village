<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public function municipality()
    {
        return $this->belongsTo('App\Municipality');
    }
}
