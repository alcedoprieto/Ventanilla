<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposolicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tiposolicitud',100);
            $table->integer('clas_id')->unsigned();
            $table->foreign('clas_id')->references('id')->on('clasificacionsolicitudes');
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
        Schema::dropIfExists('tiposolicitudes');
    }
}
