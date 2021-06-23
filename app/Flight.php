<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alsofronie\Uuid\UuidModelTrait;

/**
* Clase para administrar vuelos
* @Autor Alexis Chalco
* @FechaCreacion  2021/06/22
* @Manage
*/

class Flight extends Model
{
    use UuidModelTrait;
    /**
     * Tabla de la Base de Datos usada por el modelo.
     *
     * @var string
     */
    protected $table = 'flights';

    /**
     * Atributos que pueden ser llenados del modelo.
     *
     * @var array
     */
    protected $fillable = [
        'price',
        'airline',
        'scalas_number',
        'flight_duration',
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
