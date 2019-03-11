<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaulallenMealplannerRecipesTags extends Migration
{
    public function up()
    {
        Schema::create('paulallen_mealplanner_recipes_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('recipe_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['recipe_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paulallen_mealplanner_recipes_tags');
    }
}
