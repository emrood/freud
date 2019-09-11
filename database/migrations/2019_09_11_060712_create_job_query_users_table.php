<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobQueryUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_query_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('job_query_id')->unsigned();
            $table->foreign('job_query_id')->references('id')->on('job_queries');
            $table->integer('assigned_user')->unsigned();
            $table->foreign('assigned_user')->references('id')->on('users');
            $table->integer('admin_id')->references('id')->on('users');
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
        Schema::dropIfExists('job_query_users');
    }
}
