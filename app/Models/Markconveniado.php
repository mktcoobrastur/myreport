<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Markconveniado
 * @package App\Models
 * @version October 25, 2018, 12:08 pm UTC
 *
 * @property string convenio
 * @property string nome
 * @property string img
 * @property string status
 */
class Markconveniado extends Model
{
    use SoftDeletes;

    public $table = 'markconveniados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'convenio',
        'nome',
        'img',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'convenio' => 'string',
        'nome' => 'string',
        'img' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
