<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('latihan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar');
            $table->string('nm_latihan');
            $table->longText('sl_latihan');
            $table->string('srcCode');
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
        Schema::dropIfExists('latihan');
    }
}
