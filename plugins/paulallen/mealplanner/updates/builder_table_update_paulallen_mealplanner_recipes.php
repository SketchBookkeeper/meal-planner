<?php namespace Paulallen\MealPlanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePaulallenMealplannerRecipes extends Migration
{
    public function up()
    {
        Schema::table('paulallen_mealplanner_recipes', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('paulallen_mealplanner_recipes', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
