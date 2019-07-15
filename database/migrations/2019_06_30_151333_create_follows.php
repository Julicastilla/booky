<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
 {
     Schema::create('follows', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('user_id')->index();
         $table->integer('target_id')->index(); // ID of person being followed
         $table->timestamps();
     });
 }
  
    public function down()
    {
        //
    }
}
