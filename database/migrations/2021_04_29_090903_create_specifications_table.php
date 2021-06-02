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
        Schema::dropIfExists('specifications_info');

        Schema::create('specifications', function (Blueprint $table) {
            $table->bigIncrements('specs_id');
            $table->unsignedBigInteger('product_id');
            $table->string('connectivity');
            $table->string('dimentions');
            $table->string('weight');
            $table->string('phone_size');
            $table->string('network');
            $table->string('mobile_size');
            $table->string('cpu');
            $table->string('protection');
            $table->string('gpu');
            $table->string('chipset');
            $table->string('wlan');
            $table->string('blutooth');
            $table->string('gps');
            $table->string('radio');
            $table->string('usb');
            $table->string('data');
            $table->string('nfc');
            $table->string('battery_type');



            $table->string('tp_technology');
            $table->string('display_ratio');
            $table->string('ppi');
            $table->string('tp_multitouch');
            $table->string('rom');
            $table->string('frame');
            $table->string('back_cover');
            $table->string('sensors');
            $table->string('finger_print');
            $table->string('face_unlock');
            $table->string('charging_voltage');
            $table->string('video_streaming');
            $table->string('fast_charge');
            $table->string('ac_input');
            $table->string('output_voltage');
            $table->string('output_current');
            $table->string('charging_time');

            $table->string('sim1_support');
            $table->string('sim2_support');
            $table->string('wifi_2-4');
            $table->string('wifi_5');
            $table->string('wifi_security');
            $table->string('wifi_hotspot');
            $table->string('screen_cast');
            $table->string('features');
            $table->string('audio_jack');
            $table->string('mic_qty');
            $table->string('front_autofocus');
            $table->string('sensor_size');
            $table->string('aperture');
            $table->string('front_record');
            $table->string('rear_flash');
            $table->string('rear_video'); 




            $table->string('external_memory');
            $table->string('standby');
            $table->string('talk_time'); 
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

        Schema::create('specifications_info', function (Blueprint $table) {
            $table->bigIncrements('specs_id');
            $table->unsignedBigInteger('product_id');
            $table->string('category');
            $table->string('specs_name');
            $table->string('specs_value'); 
            
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
