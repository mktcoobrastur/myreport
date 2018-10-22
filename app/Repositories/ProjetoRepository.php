<?php

namespace App\Repositories;

use App\Models\Projeto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjetoRepository
 * @package App\Repositories
 * @version October 22, 2018, 4:22 pm UTC
 *
 * @method Projeto findWithoutFail($id, $columns = ['*'])
 * @method Projeto find($id, $columns = ['*'])
 * @method Projeto first($columns = ['*'])
*/
class ProjetoRepository extends BaseRepository
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
        return Projeto::class;
    }
}
