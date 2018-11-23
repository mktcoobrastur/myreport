<?php

namespace App\Repositories;

use App\Models\Lamina;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LaminaRepository
 * @package App\Repositories
 * @version November 21, 2018, 12:45 pm UTC
 *
 * @method Lamina findWithoutFail($id, $columns = ['*'])
 * @method Lamina find($id, $columns = ['*'])
 * @method Lamina first($columns = ['*'])
*/
class LaminaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hotel',
        'texto',
        'obs',
        '1',
        '2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lamina::class;
    }
}
