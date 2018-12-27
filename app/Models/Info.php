<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Info
 * @package App\Models
 * @version December 27, 2018, 5:44 pm UTC
 *
 * @property string title
 * @property string description
 * @property string keywords
 * @property string fone_central
 * @property string fone_1
 * @property string fone_2
 * @property string email
 * @property string email_r
 * @property string endereco
 * @property string logo
 * @property string c_pre
 * @property string c_sec
 */
class Info extends Model
{
    use SoftDeletes;

    public $table = 'info';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'keywords',
        'fone_central',
        'fone_1',
        'fone_2',
        'email',
        'email_r',
        'endereco',
        'logo',
        'c_pre',
        'c_sec'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'keywords' => 'string',
        'fone_central' => 'string',
        'fone_1' => 'string',
        'fone_2' => 'string',
        'email' => 'string',
        'email_r' => 'string',
        'endereco' => 'string',
        'logo' => 'string',
        'c_pre' => 'string',
        'c_sec' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
