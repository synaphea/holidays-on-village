<?php

namespace App;

use Jenssegers\Mongodb\Model;

class Social extends Model
{
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

    protected $connection = 'mongodb';

}