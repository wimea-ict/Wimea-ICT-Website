<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumericalWeatherController extends Controller
{
    //
    public function index(){
        return view("ResearchComponents.numericalweather");
    }
    
}
