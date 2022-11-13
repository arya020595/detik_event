<?php

namespace App\Services;
use App\Models\Ticket;

class TicketService {

    public function show($request) {
        $tiket = Ticket::where('id', $request->route('ticketId'))
                       ->where('event_id', $request->route('eventId'))
                       ->first();

        return $tiket;
    }

    public function update($request) {
        $tiket = Ticket::where('id', $request->route('ticketId'))
                       ->where('event_id', $request->route('eventId'))
                       ->first();

        $tiket->status = $request->get('status');
        $tiket->save();

        return $tiket;
    }
}