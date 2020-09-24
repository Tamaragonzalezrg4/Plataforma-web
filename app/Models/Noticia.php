<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Noticia
 * @package App\Models
 * @version September 24, 2020, 1:25 am UTC
 *
 * @property string $titulo
 * @property string $descripcion
 * @property string $imagen
 * @property string $enlace_fuente
 */
class Noticia extends Model
{
    use SoftDeletes;

    public $table = 'noticias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'enlace_fuente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'descripcion' => 'string',
        'imagen' => 'string',
        'enlace_fuente' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required',
        'enlace_fuente' => 'required'
    ];

    
}
