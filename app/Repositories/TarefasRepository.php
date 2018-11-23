<?php

namespace App\Repositories;

use App\Models\Tarefas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TarefasRepository
 * @package App\Repositories
 * @version October 16, 2018, 5:26 pm UTC
 *
 * @method Tarefas findWithoutFail($id, $columns = ['*'])
 * @method Tarefas find($id, $columns = ['*'])
 * @method Tarefas first($columns = ['*'])
*/
class TarefasRepository extends BaseRepository
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
        return Tarefas::class;
    }
}
