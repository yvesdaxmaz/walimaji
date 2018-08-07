<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_productions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->string('description');
            $table->dateTime('dateTime');
            $table->integer('refProduction')->references('id')->on('producer_production_refs')->onDelete('restrict');
            $table->integer('idProducer')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('producer_productions');
    }
}
