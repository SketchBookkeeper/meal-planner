<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePaulallenMealplannerTags extends Migration
{
    public function up()
    {
        Schema::create('paulallen_mealplanner_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('color')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('paulallen_mealplanner_tags');
    }
}
