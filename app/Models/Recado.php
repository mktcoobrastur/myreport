<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Recado
 * @package App\Models
 * @version October 26, 2018, 5:02 pm UTC
 *
 * @property string from
 * @property string to
 * @property string recado
 */
class Recado extends Model
{
    use SoftDeletes;

    public $table = 'recados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'from',
        'to',
        'recado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from' => 'string',
        'to' => 'string',
        'recado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
