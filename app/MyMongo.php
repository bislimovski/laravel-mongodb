<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class MyMongo extends Model
{
    protected $collection = 'item';

}
