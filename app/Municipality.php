<?php

namespace App;

use Jenssegers\Mongodb\Model;

class Municipality extends Model
{
    public function county()
    {
        return $this->belongsTo('App\County');
    }
}
