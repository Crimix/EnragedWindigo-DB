<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('twitter_name');
            $table->string('twitter_id');
            $table->decimal('analysis_val', 10, 7);
            $table->decimal('mi_val', 10, 7);
            $table->decimal('sentiment_val', 10, 7);
            $table->decimal('media_val', 10, 7);
            $table->integer('tweet_count')->unsigned();
            $table->boolean('protect');
            $table->boolean('processed');
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
        Schema::dropIfExists('twitters');
    }
}
