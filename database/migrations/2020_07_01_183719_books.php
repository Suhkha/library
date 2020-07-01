<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('categories');
        $table->bigInteger('author_id')->unsigned();
        $table->foreign('author_id')->references('id')->on('authors');
        $table->string('name');
        $table->date('published_date');
        $table->integer('status');
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
      Schema::dropIfExists('books');
    }
}
