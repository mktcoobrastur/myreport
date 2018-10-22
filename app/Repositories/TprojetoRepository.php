<?php

namespace App\Repositories;

use App\Models\Tprojeto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TprojetoRepository
 * @package App\Repositories
 * @version October 22, 2018, 8:00 pm UTC
 *
 * @method Tprojeto findWithoutFail($id, $columns = ['*'])
 * @method Tprojeto find($id, $columns = ['*'])
 * @method Tprojeto first($columns = ['*'])
*/
class TprojetoRepository extends BaseRepository
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
        return Tprojeto::class;
    }
}
