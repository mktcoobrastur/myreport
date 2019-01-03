<?php

namespace App\Repositories;

use App\Models\Dash;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DashRepository
 * @package App\Repositories
 * @version January 3, 2019, 6:00 pm UTC
 *
 * @method Dash findWithoutFail($id, $columns = ['*'])
 * @method Dash find($id, $columns = ['*'])
 * @method Dash first($columns = ['*'])
*/
class DashRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'dap',
        'content'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dash::class;
    }
}
