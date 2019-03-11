<?php namespace Paulallen\MealPlanner\Models;

use Model;

/**
 * Model
 */
class Recipe extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'paulallen_mealplanner_recipes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'tags' => [
            'PaulAllen\MealPlanner\Models\Tag',
            'table' => 'paulallen_mealplanner_recipes_tags',
            'order' => 'name'
        ]
    ];

    /**
     * @var array Single Attachments
     */
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
