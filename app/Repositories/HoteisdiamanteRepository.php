<?php

namespace App\Repositories;

use App\Models\Hoteisdiamante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HoteisdiamanteRepository
 * @package App\Repositories
 * @version December 21, 2018, 4:22 pm UTC
 *
 * @method Hoteisdiamante findWithoutFail($id, $columns = ['*'])
 * @method Hoteisdiamante find($id, $columns = ['*'])
 * @method Hoteisdiamante first($columns = ['*'])
*/
class HoteisdiamanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod',
        'hotel',
        'estado',
        'cidade',
        'img',
        'texto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Hoteisdiamante::class;
    }
}
