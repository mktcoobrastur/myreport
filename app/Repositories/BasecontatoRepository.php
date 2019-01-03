<?php

namespace App\Repositories;

use App\Models\Basecontato;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BasecontatoRepository
 * @package App\Repositories
 * @version January 3, 2019, 11:00 am UTC
 *
 * @method Basecontato findWithoutFail($id, $columns = ['*'])
 * @method Basecontato find($id, $columns = ['*'])
 * @method Basecontato first($columns = ['*'])
*/
class BasecontatoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'email',
        'assunto',
        'mensagem'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Basecontato::class;
    }
}
