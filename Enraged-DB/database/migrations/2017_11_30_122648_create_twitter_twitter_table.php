<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwitterTwitterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_twitter', function (Blueprint $table) {
            $table->integer('twitter_id')->unsigned();
            $table->integer('follows_id')->unsigned();
            $table->timestamps();

            $table->primary(['twitter_id', 'follows_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('twitter_twitter');
    }
}
