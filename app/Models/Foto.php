<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Foto
 * @package App\Models
 * @version October 24, 2018, 1:34 pm UTC
 *
 * @property string hotel
 * @property string codigo
 * @property string galeria
 */
class Foto extends Model
{
    use SoftDeletes;

    public $table = 'fotos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'hotel',
        'codigo',
        'galeria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hotel' => 'string',
        'codigo' => 'string',
        'galeria' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
