<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->string('meta_description');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('old_price')->nullable();
            $table->integer('visible')->default(0);
            $table->boolean('featured')->default(0);
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
        Schema::drop('products');
    }
}
