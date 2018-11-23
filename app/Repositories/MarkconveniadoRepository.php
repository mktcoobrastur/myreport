<?php

namespace App\Repositories;

use App\Models\Markconveniado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MarkconveniadoRepository
 * @package App\Repositories
 * @version October 25, 2018, 12:08 pm UTC
 *
 * @method Markconveniado findWithoutFail($id, $columns = ['*'])
 * @method Markconveniado find($id, $columns = ['*'])
 * @method Markconveniado first($columns = ['*'])
*/
class MarkconveniadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'convenio',
        'nome',
        'img',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Markconveniado::class;
    }
}
