<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests\StoreEvent;

class EventController extends Controller
{
    public function index(Request $request) {
        $events = Event::all();
        return $events;
    }

    public function add(Request $request) {
        return view('events.add');
    }

    public function store(StoreEvent $request) {        
        $event = new Event();                 
        $event->create($request->all());
        return redirect('/events');
    } 
}
