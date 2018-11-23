<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Convenio
 * @package App\Models
 * @version October 22, 2018, 1:09 pm UTC
 *
 * @property string nome
 * @property string img
 * @property string site
 * @property string texto
 */
class Convenio extends Model
{
    use SoftDeletes;

    public $table = 'convenios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'img',
        'site',
        'texto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'img' => 'string',
        'site' => 'string',
        'texto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
