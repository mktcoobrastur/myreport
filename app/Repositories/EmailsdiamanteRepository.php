<?php

namespace App\Repositories;

use App\Models\Emailsdiamante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmailsdiamanteRepository
 * @package App\Repositories
 * @version December 28, 2018, 12:51 pm UTC
 *
 * @method Emailsdiamante findWithoutFail($id, $columns = ['*'])
 * @method Emailsdiamante find($id, $columns = ['*'])
 * @method Emailsdiamante first($columns = ['*'])
*/
class EmailsdiamanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Emailsdiamante::class;
    }
}
