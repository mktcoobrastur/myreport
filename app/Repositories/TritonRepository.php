<?php

namespace App\Repositories;

use App\Models\Triton;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TritonRepository
 * @package App\Repositories
 * @version October 16, 2018, 7:01 pm UTC
 *
 * @method Triton findWithoutFail($id, $columns = ['*'])
 * @method Triton find($id, $columns = ['*'])
 * @method Triton first($columns = ['*'])
*/
class TritonRepository extends BaseRepository
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
        return Triton::class;
    }
}
