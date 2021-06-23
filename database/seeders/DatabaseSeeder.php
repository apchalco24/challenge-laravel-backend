<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Flight;
use App\TicketsFlight;
Use \DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $oFlight = new Flight;
        //$oFlight->id = 1;
        $oFlight->airline = 'Tame';
        $oFlight->save();

        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Lima';
        $oTicketFlight->destination_city = 'Cali';
        $oTicketFlight->date_flight = '2021-07-01 10:00:00';
        $oTicketFlight->return_date = '2021-07-05 21:00:00';
        $oTicketFlight->scalas_number = 2;
        $oTicketFlight->flight_duration = 5;
        $oTicketFlight->price = 149.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();

        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Quito';
        $oTicketFlight->destination_city = 'Guayaquil';
        $oTicketFlight->date_flight = '2021-06-22 09:00:00';
        $oTicketFlight->return_date = '2021-06-30 09:00:00';
        $oTicketFlight->scalas_number = 0;
        $oTicketFlight->flight_duration = 1;
        $oTicketFlight->price = 50.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();
        
        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Guayaquil';
        $oTicketFlight->destination_city = 'Cuenca';
        $oTicketFlight->date_flight = '2021-08-13 13:30:00';
        $oTicketFlight->return_date = '2021-08-18 09:00:00';
        $oTicketFlight->scalas_number = 0;
        $oTicketFlight->flight_duration = 1;
        $oTicketFlight->price = 50.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();

        $oFlight = new Flight;
        //$oFlight->id = 2;
        $oFlight->airline = 'LAN';
        $oFlight->save();

        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Lima';
        $oTicketFlight->destination_city = 'Cali';
        $oTicketFlight->date_flight = '2021-07-01 10:00:00';
        $oTicketFlight->return_date = '2021-07-05 21:00:00';
        $oTicketFlight->scalas_number = 5;
        $oTicketFlight->flight_duration = 8;
        $oTicketFlight->price = 110.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();

        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Quito';
        $oTicketFlight->destination_city = 'Guayaquil';
        $oTicketFlight->date_flight = '2021-06-22 09:00:00';
        $oTicketFlight->return_date = '2021-06-30 09:00:00';
        $oTicketFlight->scalas_number = 0;
        $oTicketFlight->flight_duration = 1;
        $oTicketFlight->price = 50.00;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();
        
        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Guayaquil';
        $oTicketFlight->destination_city = 'Cuenca';
        $oTicketFlight->date_flight = '2021-08-13 13:30:00';
        $oTicketFlight->return_date = '2021-08-18 09:00:00';
        $oTicketFlight->scalas_number = 0;
        $oTicketFlight->flight_duration = 1;
        $oTicketFlight->price = 50.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();

        $oFlight = new Flight;
        //$oFlight->id = 3;
        $oFlight->airline = 'LATAM';
        $oFlight->save();

        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Lima';
        $oTicketFlight->destination_city = 'Cali';
        $oTicketFlight->date_flight = '2021-07-01 10:00:00';
        $oTicketFlight->return_date = '2021-07-05 21:00:00';
        $oTicketFlight->scalas_number = 1;
        $oTicketFlight->flight_duration = 3;
        $oTicketFlight->price = 340.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();

        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Quito';
        $oTicketFlight->destination_city = 'Guayaquil';
        $oTicketFlight->date_flight = '2021-06-22 09:00:00';
        $oTicketFlight->return_date = '2021-06-30 09:00:00';
        $oTicketFlight->scalas_number = 0;
        $oTicketFlight->flight_duration = 1;
        $oTicketFlight->price = 60.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();
        
        $oTicketFlight = new TicketsFlight;
        $oTicketFlight->city_origin = 'Guayaquil';
        $oTicketFlight->destination_city = 'Cuenca';
        $oTicketFlight->date_flight = '2021-08-13 13:30:00';
        $oTicketFlight->return_date = '2021-08-18 09:00:00';
        $oTicketFlight->scalas_number = 0;
        $oTicketFlight->flight_duration = 1;
        $oTicketFlight->price = 54.99;
        $oTicketFlight->flight_id = $oFlight->id;
        $oTicketFlight->save();
    }
}
