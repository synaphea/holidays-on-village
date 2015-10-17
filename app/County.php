<?php

namespace App;

use Jenssegers\Mongodb\Model;

class County extends Model
{
    public $timestamps = false;
	
    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
