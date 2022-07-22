<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast_episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->longtext('description');
            $table->unsignedBigInteger('podcast_id')
                ->foreign('podcast_id')
                ->references('id')
                ->on('podcasts')
                ->onDelete('cascade');
            $table->string('episode_audio_name');
            $table->string('episode_audio_storage_location');
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
        Schema::dropIfExists('podcast_episodes');
    }
};
