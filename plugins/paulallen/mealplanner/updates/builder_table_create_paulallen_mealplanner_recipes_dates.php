<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaulallenMealplannerRecipesDates extends Migration
{
    public function up()
    {
        Schema::create('paulallen_mealplanner_recipes_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('recipe_id')->unsigned();
            $table->integer('date_id')->unsigned();
            $table->primary(['recipe_id','date_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paulallen_mealplanner_recipes_dates');
    }
}
