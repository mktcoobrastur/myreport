<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class table
 * @package App\Models
 * @version November 16, 2018, 4:42 pm UTC
 *
 */
class table extends Model
{
    use SoftDeletes;

    public $table = 'tables';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        
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
