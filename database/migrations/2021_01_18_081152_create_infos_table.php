<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->nullable();
            $table->text('main_title_ar')->nullable();
            $table->text('main_title_en')->nullable();
            $table->text('msg_ar')->nullable();
            $table->text('msg_en')->nullable();
            $table->text('goal_ar')->nullable();
            $table->text('vision_ar')->nullable();
            $table->text('vision_en')->nullable();
            $table->text('donate_title_ar')->nullable();
            $table->text('donate_title_en')->nullable();
            $table->text('email')->nullable();
            $table->text('website')->nullable();
            $table->text('phone')->nullable();
            $table->text('instagram')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('facebook')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
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
        Schema::dropIfExists('infos');
    }
}
