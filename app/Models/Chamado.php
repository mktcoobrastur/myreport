<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Chamado
 * @package App\Models
 * @version October 22, 2018, 12:56 pm UTC
 *
 * @property string usuario
 * @property string cpf
 * @property string email
 * @property string fone
 * @property string motivo
 * @property string tecnico
 * @property string mensagem
 * @property string entendimento
 * @property string solucao
 * @property string status
 */
class Chamado extends Model
{
    use SoftDeletes;

    public $table = 'chamados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'usuario',
        'cpf',
        'email',
        'fone',
        'motivo',
        'tecnico',
        'mensagem',
        'entendimento',
        'solucao',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'usuario' => 'string',
        'cpf' => 'string',
        'email' => 'string',
        'fone' => 'string',
        'motivo' => 'string',
        'tecnico' => 'string',
        'mensagem' => 'string',
        'entendimento' => 'string',
        'solucao' => 'string',
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
