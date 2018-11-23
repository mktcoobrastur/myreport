<?php

namespace App\Repositories;

use App\Models\Hotei;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HoteiRepository
 * @package App\Repositories
 * @version October 26, 2018, 11:26 am UTC
 *
 * @method Hotei findWithoutFail($id, $columns = ['*'])
 * @method Hotei find($id, $columns = ['*'])
 * @method Hotei first($columns = ['*'])
*/
class HoteiRepository extends BaseRepository
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
        return Hotei::class;
    }
}
