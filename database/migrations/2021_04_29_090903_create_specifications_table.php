<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('specifications');

        Schema::create('specifications', function (Blueprint $table) {
            $table->bigIncrements('specs_id');
            $table->unsignedBigInteger('product_id');
            $table->string('connectivity');
            $table->string('dimentions');
            $table->string('weight');
            $table->string('os');
            $table->string('sim_support');
            $table->string('display_type');
            $table->string('resolution');
            $table->string('internal_memory');
            $table->string('ram');
            $table->string('performance');
            $table->string('battery');
            $table->string('front_camera');
            $table->string('back_camera');
            $table->string('description');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('specifications');
    }
}
