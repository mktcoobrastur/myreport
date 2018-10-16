<?php

namespace App\Repositories;

use App\Models\Relacionamentos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RelacionamentosRepository
 * @package App\Repositories
 * @version October 16, 2018, 7:17 pm UTC
 *
 * @method Relacionamentos findWithoutFail($id, $columns = ['*'])
 * @method Relacionamentos find($id, $columns = ['*'])
 * @method Relacionamentos first($columns = ['*'])
*/
class RelacionamentosRepository extends BaseRepository
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
        return Relacionamentos::class;
    }
}
