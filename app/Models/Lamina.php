<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lamina
 * @package App\Models
 * @version November 21, 2018, 12:45 pm UTC
 *
 * @property integer hotel
 * @property string texto
 * @property string obs
 * @property string 1
 * @property string 2
 */
class Lamina extends Model
{
    use SoftDeletes;

    public $table = 'laminas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'hotel',
        'texto',
        'obs',
        'lamina1',
        'lamina2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hotel' => 'integer',
        'texto' => 'string',
        'obs' => 'string',
        'lamina1' => 'string',
        'lamina2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
