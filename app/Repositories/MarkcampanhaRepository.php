<?php

namespace App\Repositories;

use App\Models\Markcampanha;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MarkcampanhaRepository
 * @package App\Repositories
 * @version October 25, 2018, 12:25 pm UTC
 *
 * @method Markcampanha findWithoutFail($id, $columns = ['*'])
 * @method Markcampanha find($id, $columns = ['*'])
 * @method Markcampanha first($columns = ['*'])
*/
class MarkcampanhaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'conveniado',
        'nome',
        'descricao',
        'img',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Markcampanha::class;
    }
}
