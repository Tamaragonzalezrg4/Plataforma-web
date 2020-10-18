<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tabla
 * @package App\Models
 * @version October 18, 2020, 12:23 am -03
 *
 * @property string $femenino
 * @property string $masculino
 * @property string $ambos
 * @property string $otro
 * @property string $encarnacion
 * @property string $cambyreta
 * @property string $coronel_bogado
 * @property string $capitan_mirando
 * @property string $positivo
 * @property string $negativo
 * @property string $recuperado
 * @property string $fallecido
 * @property string $inconcluso
 */
class Tabla extends Model
{
    use SoftDeletes;

    public $table = 'tablas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'femenino',
        'masculino',
        'ambos',
        'otro',
        'encarnacion',
        'cambyreta',
        'coronel_bogado',
        'capitan_mirando',
        'positivo',
        'negativo',
        'recuperado',
        'fallecido',
        'inconcluso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'femenino' => 'string',
        'masculino' => 'string',
        'ambos' => 'string',
        'otro' => 'string',
        'encarnacion' => 'string',
        'cambyreta' => 'string',
        'coronel_bogado' => 'string',
        'capitan_mirando' => 'string',
        'positivo' => 'string',
        'negativo' => 'string',
        'recuperado' => 'string',
        'fallecido' => 'string',
        'inconcluso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'femenino' => 'required',
        'masculino' => 'required',
        'ambos' => 'required',
        'otro' => 'required',
        'encarnacion' => 'required',
        'cambyreta' => 'required',
        'coronel_bogado' => 'required',
        'capitan_mirando' => 'required',
        'positivo' => 'required',
        'negativo' => 'required',
        'recuperado' => 'required',
        'fallecido' => 'required',
        'inconcluso' => 'required'
    ];

    
}
