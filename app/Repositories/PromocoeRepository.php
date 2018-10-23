<?php

namespace App\Repositories;

use App\Models\Promocoe;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PromocoeRepository
 * @package App\Repositories
 * @version October 23, 2018, 5:53 pm UTC
 *
 * @method Promocoe findWithoutFail($id, $columns = ['*'])
 * @method Promocoe find($id, $columns = ['*'])
 * @method Promocoe first($columns = ['*'])
*/
class PromocoeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hotel',
        'resumo',
        'codigo',
        'estado',
        'plano',
        'imgPrincipal',
        'imgLamina'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Promocoe::class;
    }
}
