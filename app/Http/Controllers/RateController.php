<?php

namespace App\Http\Controllers;

use App\Events\GetRateEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function getdata()
    {
        return view('welcome');
    }
}
