<?php

namespace App\Repositories;

use App\Models\Representante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RepresentanteRepository
 * @package App\Repositories
 * @version November 13, 2018, 12:26 pm UTC
 *
 * @method Representante findWithoutFail($id, $columns = ['*'])
 * @method Representante find($id, $columns = ['*'])
 * @method Representante first($columns = ['*'])
*/
class RepresentanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'qnt',
        'deteled_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Representante::class;
    }
}
