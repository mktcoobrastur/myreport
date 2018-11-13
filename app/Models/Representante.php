<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Representante
 * @package App\Models
 * @version November 13, 2018, 12:26 pm UTC
 *
 * @property string nome
 * @property integer qnt
 * @property string|\Carbon\Carbon deteled_at
 */
class Representante extends Model
{
    use SoftDeletes;

    public $table = 'representantes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'qnt',
        'deteled_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
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
