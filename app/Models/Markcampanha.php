<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Markcampanha
 * @package App\Models
 * @version October 25, 2018, 12:25 pm UTC
 *
 * @property string conveniado
 * @property string nome
 * @property string descricao
 * @property string img
 * @property string status
 */
class Markcampanha extends Model
{
    use SoftDeletes;

    public $table = 'markcampanhas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'conveniado',
        'nome',
        'descricao',
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
        'conveniado' => 'string',
        'nome' => 'string',
        'descricao' => 'string',
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
