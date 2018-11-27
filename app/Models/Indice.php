<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Indice
 * @package App\Models
 * @version November 27, 2018, 10:38 am UTC
 *
 * @property string mes
 * @property string indice
 * @property date periodoinicio
 * @property date periodofinal
 * @property string atendidas
 * @property string voltarianegocio
 * @property string solucao
 * @property string reclamacoestotal
 * @property string reclamacoesatendidas
 * @property string reclamacoesnaoatendidas
 * @property string temporesposta
 * @property string notaconsumidor
 * @property string avaliacoes
 */
class Indice extends Model
{
    use SoftDeletes;

    public $table = 'indices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'mes',
        'indice',
        'periodoinicio',
        'periodofinal',
        'atendidas',
        'voltarianegocio',
        'solucao',
        'reclamacoestotal',
        'reclamacoesatendidas',
        'reclamacoesnaoatendidas',
        'temporesposta',
        'notaconsumidor',
        'avaliacoes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mes' => 'string',
        'indice' => 'string',
        'periodoinicio' => 'date',
        'periodofinal' => 'date',
        'atendidas' => 'string',
        'voltarianegocio' => 'string',
        'solucao' => 'string',
        'reclamacoestotal' => 'string',
        'reclamacoesatendidas' => 'string',
        'reclamacoesnaoatendidas' => 'string',
        'temporesposta' => 'string',
        'notaconsumidor' => 'string',
        'avaliacoes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
