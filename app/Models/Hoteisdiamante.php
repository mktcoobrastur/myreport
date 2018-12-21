<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hoteisdiamante
 * @package App\Models
 * @version December 21, 2018, 4:22 pm UTC
 *
 * @property string cod
 * @property string hotel
 * @property string estado
 * @property string cidade
 * @property string img
 * @property string texto
 */
class Hoteisdiamante extends Model
{
    use SoftDeletes;

    public $table = 'hoteisdiamante';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cod',
        'hotel',
        'estado',
        'cidade',
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
        'cod' => 'string',
        'hotel' => 'string',
        'estado' => 'string',
        'cidade' => 'string',
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
