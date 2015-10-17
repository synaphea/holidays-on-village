<?php

namespace App;

use Jenssegers\Mongodb\Model;

class Region extends Model
{
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

    protected $connection = 'mongodb';
    protected $collection = 'regions';

}