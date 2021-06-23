<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Bases\Flhtig;
use Bases\TicketsFlight;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airline_tickets')->truncate();
        DB::table('flights')->truncate();
        $oFlight = new Flight;
        $oFlight->airline = 'Tame';
        $oFlight->save();

        $oFlight = new Flight;
        $oFlight->airline = 'LAN';
        $oFlight->save();

        $oFlight = new Flight;
        $oFlight->airline = 'LATAM';
        $oFlight->save();

        $oTicketFlight = new TicketFlight;
        

    }
}
