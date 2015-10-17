<?php

namespace App;

use Jenssegers\Mongodb\Model;

class Village extends Model
{
    public function municipality()
    {
        return $this->belongsTo('App\Municipality');
    }
}
