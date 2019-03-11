<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaulallenMealplannerDates extends Migration
{
    public function up()
    {
        Schema::create('paulallen_mealplanner_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->default(0);
            $table->date('date');
            $table->integer('recipe_id')->unsigned()->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paulallen_mealplanner_dates');
    }
}
