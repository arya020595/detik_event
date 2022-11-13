<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function store(Request $request)
    {
        $newEvent = new Event([
            'title' => $request->get('title'),
        ]);
        $newEvent->save();

        return $newEvent;
    }

    public function show(Event $event)
    {
        return Event::find($event);
    }

    public function update(Request $request, Event $event)
    {
        $event = Event::findOrFail($event['id']);
        $event->title = $request->get('title');
        $event->save();

        return $event;
    }

    public function destroy(Event $event)
    {
        $event = Event::findOrFail($event['id']);
        $event->delete();

        return 204;
    }
}
