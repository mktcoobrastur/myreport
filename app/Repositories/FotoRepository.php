<?php

namespace App\Repositories;

use App\Models\Foto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FotoRepository
 * @package App\Repositories
 * @version October 24, 2018, 1:34 pm UTC
 *
 * @method Foto findWithoutFail($id, $columns = ['*'])
 * @method Foto find($id, $columns = ['*'])
 * @method Foto first($columns = ['*'])
*/
class FotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hotel',
        'codigo',
        'galeria'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Foto::class;
    }
}
