<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Parceiros
 * @package App\Models
 * @version December 28, 2018, 11:48 am UTC
 *
 * @property string parceiro
 * @property string img
 * @property string link
 */
class Parceiros extends Model
{
    use SoftDeletes;

    public $table = 'parceirosdiamante';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'parceiro',
        'img',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parceiro' => 'string',
        'img' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
