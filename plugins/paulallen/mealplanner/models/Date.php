<?php namespace Paulallen\MealPlanner\Models;

use Model;

/**
 * Model
 */
class Date extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'paulallen_mealplanner_dates';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
