<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaulallenMealplannerIngredients extends Migration
{
    public function up()
    {
        Schema::table('paulallen_mealplanner_ingredients', function($table)
        {
            $table->integer('user_id')->unsigned()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('paulallen_mealplanner_ingredients', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
