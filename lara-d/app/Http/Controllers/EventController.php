<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $events = Event::future()->ascStartDatetime()->get();
        return view('events.index')->with('events', $events);
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

    public function show(Event $event)
    {
        return view('events.show')->with('event', $event);
    }
}
