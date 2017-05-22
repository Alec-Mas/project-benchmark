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
			$table->string('ProjectName');
			$table->string('ProjectType');
			$table->string('Industry');
			$table->int('TeamSize');
			$table->date('DateStarted');
			$table->date('ExpectedFinishDate');
			$table->date('ActualFinishDate');
			$table->decimal('OriginalBudget');
			$table->decimal('ActualBudget');
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
