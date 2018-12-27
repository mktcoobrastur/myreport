<?php

namespace App\Repositories;

use App\Models\Info;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InfoRepository
 * @package App\Repositories
 * @version December 27, 2018, 5:44 pm UTC
 *
 * @method Info findWithoutFail($id, $columns = ['*'])
 * @method Info find($id, $columns = ['*'])
 * @method Info first($columns = ['*'])
*/
class InfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'keywords',
        'fone_central',
        'fone_1',
        'fone_2',
        'email',
        'email_r',
        'endereco',
        'logo',
        'c_pre',
        'c_sec'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Info::class;
    }
}
