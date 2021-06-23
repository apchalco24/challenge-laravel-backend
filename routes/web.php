<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'flights'], function(){
    Route::get('/getFlights', 'FlightController@searchFlight')->name('api.flights.getFlights');
    Route::get('/getTickets','TicketsflightController@searchTickets');
});
