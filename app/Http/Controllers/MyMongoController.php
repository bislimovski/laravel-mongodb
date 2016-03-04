<?php

namespace App\Http\Controllers;

use App\MyMongo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyMongoController extends Controller
{

    public function index()
    {
        return MyMongo::all();
    }
}
