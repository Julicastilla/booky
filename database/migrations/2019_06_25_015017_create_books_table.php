<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('title_id')->unsigned();
            $table->foreign('title_id')->references('id')->on('titles');

            $table->bigInteger('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('authors');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('image')->nullable();

            $table->bigInteger('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

            $table->string('review');

            $table->bigInteger('interested_id')->nullable;

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
