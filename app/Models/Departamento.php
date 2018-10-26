<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Departamento
 * @package App\Models
 * @version October 26, 2018, 12:42 pm UTC
 *
 * @property string depto
 * @property string descricao
 * @property string gerente
 */
class Departamento extends Model
{
    use SoftDeletes;

    public $table = 'departamentos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'depto',
        'descricao',
        'gerente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'depto' => 'string',
        'descricao' => 'string',
        'gerente' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
