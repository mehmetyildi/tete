<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

        /* Article.php */
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_sq')->nullable();
            $table->string('main_image')->nullable();
            $table->string('main_image_downloadable')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->boolean('publish')->default(false);
            $table->nullableTimestamps();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery');
        
       
    }
}
