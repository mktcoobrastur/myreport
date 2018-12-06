<?php

namespace App\Repositories;

use App\Models\Funcionario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FuncionarioRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:02 pm UTC
 *
 * @method Funcionario findWithoutFail($id, $columns = ['*'])
 * @method Funcionario find($id, $columns = ['*'])
 * @method Funcionario first($columns = ['*'])
*/
class FuncionarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'setor',
        'nome',
        'ramal',
        'email',
        'externo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Funcionario::class;
    }
}
