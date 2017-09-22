<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index(){
        $data = Event::all();
        return view('pages.events.index', [
            'events' => $data
        ]);
    }
    
    public function event($slug){
        $data = Event::where('slug', $slug)->get();
        return view('pages.events.event', [
            'event' => $data
        ]);
    }
}
