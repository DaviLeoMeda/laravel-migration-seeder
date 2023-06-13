<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function getHome(){
        return view('partials.welcome');
    }
}
