<?php

namespace App\Repositories;

use App\Models\Vendasre;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VendasreRepository
 * @package App\Repositories
 * @version November 13, 2018, 3:18 pm UTC
 *
 * @method Vendasre findWithoutFail($id, $columns = ['*'])
 * @method Vendasre find($id, $columns = ['*'])
 * @method Vendasre first($columns = ['*'])
*/
class VendasreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'representante',
        'qnt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vendasre::class;
    }
}
