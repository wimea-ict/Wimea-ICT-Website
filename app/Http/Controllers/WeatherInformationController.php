<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherInformationController extends Controller
{
    //
    public function index(){
        return view("ResearchComponents.weatherinformation");
    }
}
