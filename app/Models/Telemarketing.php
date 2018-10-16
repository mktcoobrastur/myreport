<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Telemarketing
 * @package App\Models
 * @version October 16, 2018, 7:41 pm UTC
 *
 * @property string prioridade
 * @property string tarefa
 * @property string acao
 * @property string departamento
 * @property string status
 */
class Telemarketing extends Model
{
    use SoftDeletes;

    public $table = 'telemarketing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'prioridade',
        'tarefa',
        'acao',
        'departamento',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'prioridade' => 'string',
        'tarefa' => 'string',
        'acao' => 'string',
        'departamento' => 'string',
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
