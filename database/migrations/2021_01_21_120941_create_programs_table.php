<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->text('title_ar')->nullable();
            $table->text('title_en')->nullable();
            $table->text('preview_ar')->nullable();
            $table->text('preview_en')->nullable();
            $table->text('content_ar')->nullable();
            $table->text('content_en')->nullable();
            $table->text('img')->nullable();
            $table->text('file')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
