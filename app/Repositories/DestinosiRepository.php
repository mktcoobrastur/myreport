<?php

namespace App\Repositories;

use App\Models\Destinosi;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DestinosiRepository
 * @package App\Repositories
 * @version January 3, 2019, 2:40 pm UTC
 *
 * @method Destinosi findWithoutFail($id, $columns = ['*'])
 * @method Destinosi find($id, $columns = ['*'])
 * @method Destinosi first($columns = ['*'])
*/
class DestinosiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'destino',
        'estado',
        'resumo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Destinosi::class;
    }
}
