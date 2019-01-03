<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Basecontato
 * @package App\Models
 * @version January 3, 2019, 11:00 am UTC
 *
 * @property string nome
 * @property string email
 * @property string assunto
 * @property string mensagem
 */
class Basecontato extends Model
{
    use SoftDeletes;

    public $table = 'basecontato';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'email',
        'assunto',
        'mensagem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'email' => 'string',
        'assunto' => 'string',
        'mensagem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
