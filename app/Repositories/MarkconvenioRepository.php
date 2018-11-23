<?php

namespace App\Repositories;

use App\Models\Markconvenio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MarkconvenioRepository
 * @package App\Repositories
 * @version October 25, 2018, 11:45 am UTC
 *
 * @method Markconvenio findWithoutFail($id, $columns = ['*'])
 * @method Markconvenio find($id, $columns = ['*'])
 * @method Markconvenio first($columns = ['*'])
*/
class MarkconvenioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'fone',
        'email',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Markconvenio::class;
    }
}
