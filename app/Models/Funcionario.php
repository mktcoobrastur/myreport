<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionario
 * @package App\Models
 * @version December 6, 2018, 3:02 pm UTC
 *
 * @property string setor
 * @property string nome
 * @property string ramal
 * @property string email
 * @property string externo
 */
class Funcionario extends Model
{
    use SoftDeletes;

    public $table = 'funcionarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'setor',
        'nome',
        'ramal',
        'email',
        'externo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'setor' => 'string',
        'nome' => 'string',
        'ramal' => 'string',
        'email' => 'string',
        'externo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
