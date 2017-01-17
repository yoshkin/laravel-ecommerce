<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('brands', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->string('meta_description');
            $table->text('description')->nullable();
            $table->integer('visible')->default(0);
            $table->integer('lft')->unsigned()->nullable();
            $table->integer('rgt')->unsigned()->nullable();
            $table->integer('depth')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('brands');
    }
}
