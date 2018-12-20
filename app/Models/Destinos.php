<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Destinos
 * @package App\Models
 * @version December 20, 2018, 11:43 am UTC
 *
 * @property string img_turismo
 * @property string pagina_turismo
 * @property string img_cultura
 * @property string pagina_cultura
 * @property string img_noite
 * @property string pagina_noite
 */
class Destinos extends Model
{
    use SoftDeletes;

    public $table = 'destinos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'destino',
        'img_turismo',
        'pagina_turismo',
        'img_cultura',
        'pagina_cultura',
        'img_noite',
        'pagina_noite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'destino' => 'string',
        'img_turismo' => 'string',
        'pagina_turismo' => 'string',
        'img_cultura' => 'string',
        'pagina_cultura' => 'string',
        'img_noite' => 'string',
        'pagina_noite' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
