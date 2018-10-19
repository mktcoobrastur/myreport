<?php

namespace App\Repositories;

use App\Models\Meta;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MetaRepository
 * @package App\Repositories
 * @version October 19, 2018, 5:22 pm UTC
 *
 * @method Meta findWithoutFail($id, $columns = ['*'])
 * @method Meta find($id, $columns = ['*'])
 * @method Meta first($columns = ['*'])
*/
class MetaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mes',
        'uteis',
        'meta',
        'representante'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Meta::class;
    }
}
