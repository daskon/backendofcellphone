<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCellPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_path');
            $table->integer('mobile_details_id')->unsigned();
            $table->foreign('mobile_details_id')->references('id')->on('mobile_details');
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
        Schema::dropIfExists('cell_pictures');
    }
}
