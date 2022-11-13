<?php

namespace App\Services;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TicketService {

    public function show($request) {
        $tiket = Ticket::where('id', $request->route('ticketId'))
                       ->where('event_id', $request->route('eventId'))
                       ->firstOrFail();

        return $tiket;
    }

    public function update($request) {
        $tiket = Ticket::where('id', $request->route('ticketId'))
                       ->where('event_id', $request->route('eventId'))
                       ->firstOrFail();

        $tiket->status = $request->get('status');
        $tiket->save();

        return $tiket;
    }
}