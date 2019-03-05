<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('desc',1000);
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('status');
            $table->string('project_leader');
            $table->binary('project_manager');
            $table->integer('client_company_id');
            $table->integer('estimated_time');
            $table->integer('total_time_spent');
            $table->integer('estimated_project_duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
