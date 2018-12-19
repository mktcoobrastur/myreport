<?php

namespace App\Repositories;

use App\Models\Diamante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DiamanteRepository
 * @package App\Repositories
 * @version December 19, 2018, 3:03 pm UTC
 *
 * @method Diamante findWithoutFail($id, $columns = ['*'])
 * @method Diamante find($id, $columns = ['*'])
 * @method Diamante first($columns = ['*'])
*/
class DiamanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pagina',
        'conteudo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Diamante::class;
    }
}
