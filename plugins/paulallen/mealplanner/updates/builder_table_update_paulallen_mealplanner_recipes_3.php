<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaulallenMealplannerRecipes3 extends Migration
{
    public function up()
    {
        Schema::table('paulallen_mealplanner_recipes', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('paulallen_mealplanner_recipes', function($table)
        {
            $table->integer('user_id')->unsigned()->default(0);
        });
    }
}
