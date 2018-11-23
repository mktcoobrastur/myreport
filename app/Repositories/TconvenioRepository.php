<?php

namespace App\Repositories;

use App\Models\Tconvenio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TconvenioRepository
 * @package App\Repositories
 * @version October 22, 2018, 2:28 pm UTC
 *
 * @method Tconvenio findWithoutFail($id, $columns = ['*'])
 * @method Tconvenio find($id, $columns = ['*'])
 * @method Tconvenio first($columns = ['*'])
*/
class TconvenioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'prioridade',
        'tarefa',
        'acao',
        'departamento',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tconvenio::class;
    }
}
