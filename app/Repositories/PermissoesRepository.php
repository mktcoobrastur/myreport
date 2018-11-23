<?php

namespace App\Repositories;

use App\Models\Permissoes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PermissoesRepository
 * @package App\Repositories
 * @version November 19, 2018, 1:33 pm UTC
 *
 * @method Permissoes findWithoutFail($id, $columns = ['*'])
 * @method Permissoes find($id, $columns = ['*'])
 * @method Permissoes first($columns = ['*'])
*/
class PermissoesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user',
        'acesso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Permissoes::class;
    }
}
