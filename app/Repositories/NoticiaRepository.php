<?php

namespace App\Repositories;

use App\Models\Noticia;
use App\Repositories\BaseRepository;

/**
 * Class NoticiaRepository
 * @package App\Repositories
 * @version September 24, 2020, 1:25 am UTC
*/

class NoticiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'imagen',
        'enlace_fuente'
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
        return Noticia::class;
    }
}
