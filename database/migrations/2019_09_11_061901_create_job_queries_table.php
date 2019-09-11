<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('job_queries', function (Blueprint $table) {
//            $table->increments('id');
//            $table->timestamps();
//            $table->softDeletes();
//            $table->string('title')->nullable();
//            $table->text('description')->nullable();
//            $table->double('user_price')->nullable();
//            $table->double('admin_price')->nullable();
//            $table->tinyInteger('status')->nullable();
//            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_queries');
    }
}
