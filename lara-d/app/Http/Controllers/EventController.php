<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::future()->sort()->get();
        return $events;
    }

    public function add(Request $request)
    {
        return view('events.add');
    }

    public function store(StoreEvent $request)
    {
        $event = new Event();
        $event->create($request->all());
        return redirect('/events');
    }
}
