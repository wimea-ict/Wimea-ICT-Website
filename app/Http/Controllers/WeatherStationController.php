<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherStationController extends Controller
{
    //
    public function index(){
        return view("ResearchComponents.weatherstation");
    }
}
