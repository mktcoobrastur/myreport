<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vendasre
 * @package App\Models
 * @version November 13, 2018, 3:18 pm UTC
 *
 * @property string representante
 * @property integer qnt
 */
class Vendasre extends Model
{
    use SoftDeletes;

    public $table = 'vendasre';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'indice',
        'representante',
        'qnt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'representante' => 'string',
        'qnt' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
