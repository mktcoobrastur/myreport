<?php

namespace App\Repositories;

use App\Models\Recado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RecadoRepository
 * @package App\Repositories
 * @version October 26, 2018, 5:02 pm UTC
 *
 * @method Recado findWithoutFail($id, $columns = ['*'])
 * @method Recado find($id, $columns = ['*'])
 * @method Recado first($columns = ['*'])
*/
class RecadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'from',
        'to',
        'recado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Recado::class;
    }
}
