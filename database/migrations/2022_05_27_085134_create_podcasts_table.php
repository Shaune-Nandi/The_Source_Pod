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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('time_id');
            $table->unsignedBigInteger('podcast_category')
            ->foreign('podcast_category')
            ->references('id')
            ->on('podcast_categories')
            ->onDelete('cascade');
            $table->string('title')->unique();
            $table->longtext('description');
            $table->unsignedBigInteger('user_id')
                ->foreign('user_id')
                ->references('id')
                ->on('podcasts')
                ->onDelete('cascade');
            $table->string('podcast_image_name');
            $table->string('podcast_image_storage_location');
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
        Schema::dropIfExists('podcast');
    }
};
