<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgtimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgtimelines', function (Blueprint $table) {
            $table->id();
            $table->text('thumbnail');
            $table->unsignedBigInteger('thumbnail_by');
            $table->foreign('thumbnail_by')->references('id')->on('dogs');
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
        Schema::dropIfExists('imgtimelines');
    }
}
