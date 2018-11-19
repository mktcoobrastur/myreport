<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permissoes
 * @package App\Models
 * @version November 19, 2018, 1:33 pm UTC
 *
 * @property string user
 * @property integer acesso
 */
class Permissoes extends Model
{
    use SoftDeletes;

    public $table = 'permissoes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user',
        'acesso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user' => 'string',
        'acesso' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
