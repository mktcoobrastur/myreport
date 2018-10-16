<?php

namespace App\Repositories;

use App\Models\Marketing;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MarketingRepository
 * @package App\Repositories
 * @version October 16, 2018, 7:47 pm UTC
 *
 * @method Marketing findWithoutFail($id, $columns = ['*'])
 * @method Marketing find($id, $columns = ['*'])
 * @method Marketing first($columns = ['*'])
*/
class MarketingRepository extends BaseRepository
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
        return Marketing::class;
    }
}
