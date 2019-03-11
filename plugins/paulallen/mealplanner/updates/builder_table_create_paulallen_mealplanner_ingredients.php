<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaulallenMealplannerIngredients extends Migration
{
    public function up()
    {
        Schema::create('paulallen_mealplanner_ingredients', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->string('name');
            $table->integer('quantity')->default(0);
            $table->string('unit')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paulallen_mealplanner_ingredients');
    }
}
