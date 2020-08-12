<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail');
            $table->string('name');
            $table->unsignedBigInteger('breedType');
            $table->foreign('breedType')->references('id')->on('breeds');
            $table->integer('status');
//            $table->string('breedType');
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
        Schema::dropIfExists('dog_categories');
    }
}
