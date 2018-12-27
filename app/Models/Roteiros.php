<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Roteiros
 * @package App\Models
 * @version December 27, 2018, 5:31 pm UTC
 *
 * @property string nome
 * @property string titulo
 * @property string img
 * @property string texto
 */
class Roteiros extends Model
{
    use SoftDeletes;

    public $table = 'roteiros';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'titulo',
        'img',
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
        'titulo' => 'string',
        'img' => 'string',
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
