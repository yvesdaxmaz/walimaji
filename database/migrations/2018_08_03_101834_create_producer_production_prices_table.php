<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducerProductionPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_production_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->double('priceWithTax');
            $table->double('priceWithoutTax');
            $table->dateTime('dateTime');
            $table->integer('idProduction')->references('id')->on('producer_productions')->onDelete('restrict');
            $table->integer('idProducer');
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
        Schema::dropIfExists('producer_production_prices');
    }
}
