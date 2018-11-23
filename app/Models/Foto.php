<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Foto
 * @package App\Models
 * @version October 26, 2018, 6:58 pm UTC
 *
 * @property int id
 */
class Foto extends Model
{
    use SoftDeletes;

    public $table = 'fotos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
