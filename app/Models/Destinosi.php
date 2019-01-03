<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Destinosi
 * @package App\Models
 * @version January 3, 2019, 2:40 pm UTC
 *
 * @property string destino
 * @property string estado
 * @property string resumo
 */
class Destinosi extends Model
{
    use SoftDeletes;

    public $table = 'destinosinteresses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'destino',
        'estado',
        'resumo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'destino' => 'string',
        'estado' => 'string',
        'resumo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
