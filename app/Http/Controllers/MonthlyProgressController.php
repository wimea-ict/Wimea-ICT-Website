<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyProgressController extends Controller
{
    //
    public function index(){
        return view("Downloads.monthlyprogress");
    }
}
