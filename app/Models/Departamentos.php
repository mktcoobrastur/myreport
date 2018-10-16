<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Departamentos
 * @package App\Models
 * @version October 16, 2018, 6:14 pm UTC
 *
 * @property string departamento
 * @property string gerente
 * @property string status
 */
class Departamentos extends Model
{
    use SoftDeletes;

    public $table = 'departamentos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'departamento',
        'gerente',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'departamento' => 'string',
        'gerente' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
