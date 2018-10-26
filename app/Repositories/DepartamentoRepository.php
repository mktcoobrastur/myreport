<?php

namespace App\Repositories;

use App\Models\Departamento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DepartamentoRepository
 * @package App\Repositories
 * @version October 26, 2018, 12:42 pm UTC
 *
 * @method Departamento findWithoutFail($id, $columns = ['*'])
 * @method Departamento find($id, $columns = ['*'])
 * @method Departamento first($columns = ['*'])
*/
class DepartamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'depto',
        'descricao',
        'gerente'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Departamento::class;
    }
}
