<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //
    public function index(){
        return view("Downloads.publications");
    }
}
