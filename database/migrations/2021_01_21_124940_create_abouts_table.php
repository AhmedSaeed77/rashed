<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('about_ar')->nullable();
            $table->text('about_en')->nullable();
            $table->text('vision_ar')->nullable();
            $table->text('vision_en')->nullable();
            $table->text('msg_ar')->nullable();
            $table->text('msg_en')->nullable();
            $table->text('support_en')->nullable();
            $table->text('support_ar')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
