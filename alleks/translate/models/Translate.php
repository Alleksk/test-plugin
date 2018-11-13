<?php namespace Alleks\Translate\Models;

use Model;

/**
 * Model
 */
class Translate extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'alleks_translate_test';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
