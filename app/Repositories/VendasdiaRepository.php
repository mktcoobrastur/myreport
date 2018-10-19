<?php

namespace App\Repositories;

use App\Models\Vendasdia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VendasdiaRepository
 * @package App\Repositories
 * @version October 19, 2018, 1:01 pm UTC
 *
 * @method Vendasdia findWithoutFail($id, $columns = ['*'])
 * @method Vendasdia find($id, $columns = ['*'])
 * @method Vendasdia first($columns = ['*'])
*/
class VendasdiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'qnt',
        'representante'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vendasdia::class;
    }
}
