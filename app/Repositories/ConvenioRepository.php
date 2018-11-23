<?php

namespace App\Repositories;

use App\Models\Convenio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConvenioRepository
 * @package App\Repositories
 * @version October 22, 2018, 1:09 pm UTC
 *
 * @method Convenio findWithoutFail($id, $columns = ['*'])
 * @method Convenio find($id, $columns = ['*'])
 * @method Convenio first($columns = ['*'])
*/
class ConvenioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'img',
        'site',
        'texto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Convenio::class;
    }
}
