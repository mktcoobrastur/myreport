<?php

namespace App\Repositories;

use App\Models\Destinos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DestinosRepository
 * @package App\Repositories
 * @version December 20, 2018, 11:43 am UTC
 *
 * @method Destinos findWithoutFail($id, $columns = ['*'])
 * @method Destinos find($id, $columns = ['*'])
 * @method Destinos first($columns = ['*'])
*/
class DestinosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'img_turismo',
        'pagina_turismo',
        'img_cultura',
        'pagina_cultura',
        'img_noite',
        'pagina_noite'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Destinos::class;
    }
}
