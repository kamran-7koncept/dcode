<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCreativitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('product_creativities');
        Schema::create('product_creativities', function (Blueprint $table) {
            $table->bigIncrements('creativity_id');
            $table->unsignedBigInteger('product_id');
            $table->string('creativity_name');
            $table->string('creativity_img');
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
        Schema::dropIfExists('product_creativities');
    }
}
