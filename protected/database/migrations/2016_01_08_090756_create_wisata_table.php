<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->increments('id_wisata');

            $table->string('nama', 255);
            $table->text('alamat');
            $table->integer('latitude');
            $table->integer('longtitude');
            $table->string('wilayah', 255);
            $table->string('aff', 255);


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
        Schema::drop('wisata');
    }
}
