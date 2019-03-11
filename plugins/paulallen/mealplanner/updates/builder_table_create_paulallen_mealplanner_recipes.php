<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaulallenMealplannerRecipes extends Migration
{
    public function up()
    {
        Schema::create('paulallen_mealplanner_recipes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paulallen_mealplanner_recipes');
    }
}
