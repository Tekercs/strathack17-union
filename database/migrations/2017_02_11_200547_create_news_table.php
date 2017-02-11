<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 100);
        });

        Schema::create('ads', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 80);
            $table->string('breef', 200);
            $table->longText('content');
            $table->integer('price');
            $table->integer('categoryId');
            $table->timestamps();

            $table->foreign('categoryId')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ads');
        Schema::drop('category');
    }
}
