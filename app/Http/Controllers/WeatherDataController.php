<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WeatherDataController extends Controller
{
    //
    public function index(){
        return view("ResearchComponents.weatherdata");
    }
}
