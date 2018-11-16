<?php

namespace App\Repositories;

use App\Models\table;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tableRepository
 * @package App\Repositories
 * @version November 16, 2018, 4:42 pm UTC
 *
 * @method table findWithoutFail($id, $columns = ['*'])
 * @method table find($id, $columns = ['*'])
 * @method table first($columns = ['*'])
*/
class tableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return table::class;
    }
}
