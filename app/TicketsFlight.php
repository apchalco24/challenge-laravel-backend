<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Clase para administrar vuelos
* @Autor Alexis Chalco
* @FechaCreacion  2021/06/22
* @Manage
*/

class TicketsFlight extends Model
{
    /**
     * Tabla de la Base de Datos usada por el modelo.
     *
     * @var string
     */
    protected $table = 'airplane_tickets';

    /**
     * Atributos que pueden ser llenados del modelo.
     *
     * @var array
     */
    protected $fillable = [
        'city_origin',
        'destination_origin',
        'date_flight',
        'return_date',
        'scalas_number',
        'flight_duration',
        'price',
        'flight_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Atributos generados automáticamente por el modelo.
     *
     * @var array
     */
    protected $guarded = [
        'created_at', 
        'updated_at', 
        'id',
    ];
}
