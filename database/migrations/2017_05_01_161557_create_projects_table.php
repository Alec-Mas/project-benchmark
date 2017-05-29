<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
			$table->string('project_name');
			$table->string('project_type');
			$table->string('project_industry');
			$table->integer('project_team');
			$table->date('project_start');
			$table->date('project_date_estimate');
			$table->date('project_date_actual');
			$table->decimal('project_budget_estimate');
			$table->decimal('project_budget_actual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
