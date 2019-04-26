<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("content", 2000);
            $table->integer("views");
            $table->tinyInteger("city_id");
            $table->tinyInteger("district_id");
            $table->integer("likes");
            $table->integer("dislikes");
            $table->tinyInteger("type");
            $table->integer("user_id");
            $table->tinyInteger("status");
            $table->dateTime("date");
            $table->string("extra");
            $table->double("lat");
            $table->double("lng");
            $table->timestamps();
        });

        Schema::table('announcements', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
