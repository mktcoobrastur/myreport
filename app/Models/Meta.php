<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Meta
 * @package App\Models
 * @version October 19, 2018, 5:22 pm UTC
 *
 * @property string mes
 * @property string uteis
 * @property string meta
 * @property string representante
 */
class Meta extends Model
{
    use SoftDeletes;

    public $table = 'metas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'mes',
        'uteis',
        'meta',
        'representante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mes' => 'string',
        'uteis' => 'string',
        'meta' => 'string',
        'representante' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
