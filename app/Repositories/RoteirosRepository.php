<?php

namespace App\Repositories;

use App\Models\Roteiros;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RoteirosRepository
 * @package App\Repositories
 * @version December 27, 2018, 5:31 pm UTC
 *
 * @method Roteiros findWithoutFail($id, $columns = ['*'])
 * @method Roteiros find($id, $columns = ['*'])
 * @method Roteiros first($columns = ['*'])
*/
class RoteirosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'titulo',
        'img',
        'texto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Roteiros::class;
    }
}
