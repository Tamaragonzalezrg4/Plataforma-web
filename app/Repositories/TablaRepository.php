<?php

namespace App\Repositories;

use App\Models\Tabla;
use App\Repositories\BaseRepository;

/**
 * Class TablaRepository
 * @package App\Repositories
 * @version October 18, 2020, 12:23 am -03
*/

class TablaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tabla::class;
    }
}
