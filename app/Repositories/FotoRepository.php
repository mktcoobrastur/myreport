<?php

namespace App\Repositories;

use App\Models\Foto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FotoRepository
 * @package App\Repositories
 * @version October 26, 2018, 6:58 pm UTC
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
        'id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Foto::class;
    }
}
