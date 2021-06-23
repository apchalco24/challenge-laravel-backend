<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Flight;
Use \DB;

class FlightController extends Controller
{
    public function __construct(){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Max-Age: 86400");
    }

    /**
    * Metodo para encontrar todas las aerolineas
    * @Autor alexis Chalco
    * @FechaCreacion  2021/22/06
    *
    * @method POST
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function searchFlight(){

        $oFlight = DB::table('flights')->get();

        if(!is_object($oFlight)){
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
            'oFlight' => $oFlight,
            'errors' => null,
        ];
        return response()->json($aResponse, 200);
    }
}
