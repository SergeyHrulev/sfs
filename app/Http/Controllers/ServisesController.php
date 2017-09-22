<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServisesController extends Controller
{
    //
    
    public function index(){
        return view('pages.servises.index');
    }
}
