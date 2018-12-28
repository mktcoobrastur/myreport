<?php

namespace App\Repositories;

use App\Models\Parceiros;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ParceirosRepository
 * @package App\Repositories
 * @version December 28, 2018, 11:48 am UTC
 *
 * @method Parceiros findWithoutFail($id, $columns = ['*'])
 * @method Parceiros find($id, $columns = ['*'])
 * @method Parceiros first($columns = ['*'])
*/
class ParceirosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parceiro',
        'img',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Parceiros::class;
    }
}
