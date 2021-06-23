<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TicketsFlight;
Use \DB;

class TicketsFlightController extends Controller
{
    public function __construct(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Max-Age: 86400");
    }

    /**
    * Metodo para encontrar todas tickets de vuelo
    * @Autor alexis Chalco
    * @FechaCreacion  2021/22/06
    *
    * @method POST
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function searchTickets(){

        $oTicketsFlight = DB::table('flights')
            ->join('airplane_tickets', 'flights.id', '=', 'airplane_tickets.flight_id')
            ->select('airplane_tickets.city_origin', 'airplane_tickets.destination_city',
             'airplane_tickets.date_flight', 'airplane_tickets.return_date', 'airplane_tickets.scalas_number',
             'airplane_tickets.flight_duration', 'airplane_tickets.price','flights.airline')
            ->get();

        if(!is_object($oTicketsFlight)){
        	$aResponse = [
                'status' => false,
                'message' => 'KO',
                'oFlight' => null,
                'errors' => 'No existen registros en la base',
            ];
            return response()->json($aResponse, 200);
        }
        $aResponse = [
            'status' => true,
            'message' => 'OK',
            'oTicketsFlight' => $oTicketsFlight,
            'errors' => null,
        ];
        return response()->json($aResponse, 200);
    }
}
