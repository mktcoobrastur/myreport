<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Diamante
 * @package App\Models
 * @version December 19, 2018, 3:03 pm UTC
 *
 * @property string pagina
 * @property string conteudo
 */
class Diamante extends Model
{
    use SoftDeletes;

    public $table = 'diamantes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'pagina',
        'conteudo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pagina' => 'string',
        'conteudo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
