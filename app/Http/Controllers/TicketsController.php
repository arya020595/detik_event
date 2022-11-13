<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketPostRequest;
use App\Services\TicketService;

class TicketsController extends Controller
{
    public function show(Request $request, TicketService $TicketService)
    {
        $data = $TicketService->show($request);

        return response([
            'data' => $data
        ], 200);
    }

    public function update(TicketPostRequest $request, TicketService $TicketService)
    {        
        $data = $TicketService->update($request);
        
        return response([
            'data' => $data
        ], 200);
    }
}