<?php

namespace App\Repositories;

use App\Models\Atendente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AtendenteRepository
 * @package App\Repositories
 * @version October 19, 2018, 5:38 pm UTC
 *
 * @method Atendente findWithoutFail($id, $columns = ['*'])
 * @method Atendente find($id, $columns = ['*'])
 * @method Atendente first($columns = ['*'])
*/
class AtendenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'representante'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Atendente::class;
    }
}
