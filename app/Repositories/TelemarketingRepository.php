<?php

namespace App\Repositories;

use App\Models\Telemarketing;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TelemarketingRepository
 * @package App\Repositories
 * @version October 16, 2018, 7:41 pm UTC
 *
 * @method Telemarketing findWithoutFail($id, $columns = ['*'])
 * @method Telemarketing find($id, $columns = ['*'])
 * @method Telemarketing first($columns = ['*'])
*/
class TelemarketingRepository extends BaseRepository
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
        return Telemarketing::class;
    }
}
