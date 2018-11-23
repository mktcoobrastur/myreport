<?php

namespace App\Repositories;

use App\Models\Chamado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ChamadoRepository
 * @package App\Repositories
 * @version October 22, 2018, 12:56 pm UTC
 *
 * @method Chamado findWithoutFail($id, $columns = ['*'])
 * @method Chamado find($id, $columns = ['*'])
 * @method Chamado first($columns = ['*'])
*/
class ChamadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario',
        'cpf',
        'email',
        'fone',
        'motivo',
        'mensagem',
        'entendimento',
        'solucao',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Chamado::class;
    }
}
