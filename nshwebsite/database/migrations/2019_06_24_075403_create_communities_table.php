<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('communities', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('eyecatch_path')->nullable();
          $table->string('name');
          $table->string('information')->nullable();
          $table->string('message_image_path')->nullable();
          $table->string('message')->nullable();
          $table->string('facebook_link');
          $table->string('contact')->nullable();
          $table->string('video_link')->nullable();
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
        Schema::dropIfExists('communities');
    }
}
