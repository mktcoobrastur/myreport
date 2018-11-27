<?php

namespace App\Repositories;

use App\Models\Indice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IndiceRepository
 * @package App\Repositories
 * @version November 27, 2018, 10:38 am UTC
 *
 * @method Indice findWithoutFail($id, $columns = ['*'])
 * @method Indice find($id, $columns = ['*'])
 * @method Indice first($columns = ['*'])
*/
class IndiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mes',
        'indice',
        'periodoinicio',
        'periodofinal',
        'atendidas',
        'voltarianegocio',
        'solucao',
        'reclamacoestotal',
        'reclamacoesatendidas',
        'reclamacoesnaoatendidas',
        'temporesposta',
        'notaconsumidor',
        'avaliacoes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Indice::class;
    }
}
