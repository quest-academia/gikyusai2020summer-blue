<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index(Request $request) {
        $events = Event::all();
        return $events;
    }

    public function add(Request $request) {
        return view('events.add');
    }

    public function store(Request $request) {
        $event = new Event();
        $event->name = $request->name;
        $event->body = $request->body;
        $event->save();
        return redirect('/events');
    } 
}
