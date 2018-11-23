<?php

namespace App\Repositories;

use App\Models\Negocios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NegociosRepository
 * @package App\Repositories
 * @version October 16, 2018, 7:14 pm UTC
 *
 * @method Negocios findWithoutFail($id, $columns = ['*'])
 * @method Negocios find($id, $columns = ['*'])
 * @method Negocios first($columns = ['*'])
*/
class NegociosRepository extends BaseRepository
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
        return Negocios::class;
    }
}
