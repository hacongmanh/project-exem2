<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('birthday');
            $table->string('gender');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
//            $table->string('	category_id');
            $table->unsignedBigInteger('breedType');
            $table->foreign('breedType')->references('id')->on('breeds');
//            $table->string('	breedType');
            $table->string('color');
            $table->string('thumbnails');
            $table->text('description');
            $table->text('detail');

            $table->unsignedBigInteger('mother_id');
            $table->foreign('mother_id')->references('id')->on('dogs');

            $table->unsignedBigInteger('father_id');
            $table->foreign('father_id')->references('id')->on('dogs');

//            $table->string('	mother_id');
//            $table->string('	father_id');
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
        Schema::dropIfExists('dogs');
    }
}
