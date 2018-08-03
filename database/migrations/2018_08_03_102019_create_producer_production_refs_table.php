<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerProductionRefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_production_refs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation');
            $table->string('description');
            $table->string('image');
            $table->integer('type')->references('id')->on('producer_proctuct_types')->onDelete('restrict');
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
        Schema::dropIfExists('producer_production_refs');
    }
}
