<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TicketsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('events', EventsController::class);
Route::controller(TicketsController::class)->group(function () {
    Route::get('tickets/{ticketId}/{eventId}', 'show');
    Route::put('tickets/{ticketId}/{eventId}', 'update');
});


// JANGAN LUPA IMPLENTASI SECURITY