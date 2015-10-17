<?php

namespace App;

use Jenssegers\Mongodb\Model;

class County extends Model
{
    public $timestamps = false;
	
	protected $collection = 'counties';

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
