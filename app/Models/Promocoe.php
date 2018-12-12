<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Promocoe
 * @package App\Models
 * @version October 23, 2018, 5:53 pm UTC
 *
 * @property string solicitante
 * @property string validade
 * @property string hotel
 * @property string resumo
 * @property string codigo
 * @property string estado
 * @property string cidade
 * @property string plano
 * @property string imgPrincipal
 * @property string imgLamina
 */
class Promocoe extends Model
{
    use SoftDeletes;

    public $table = 'promocoes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'solicitante',
        'validade',
        'hotel',
        'resumo',
        'codigo',
        'estado',
        'cidade',
        'plano',
        'imgPrincipal',
        'imgLamina'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'solicitante'             => 'string',
        'id'                => 'integer',
        'validade'          => 'date',
        'hotel'             => 'string',
        'resumo'            => 'string',
        'codigo'            => 'string',
        'estado'            => 'string',
        'cidade'            => 'string',
        'plano'             => 'string',
        'imgPrincipal'      => 'string',
        'imgLamina'         => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
