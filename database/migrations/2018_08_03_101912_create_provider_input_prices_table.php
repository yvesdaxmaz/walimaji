<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderInputPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_input_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->double('priceWithTax');
            $table->double('priceWithoutTax');
            $table->dateTime('dateTime');
            $table->integer('idProduction')->references('id')->on('provider_inputs')->onDelete('restrict');
            $table->integer('idProvider');
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
        Schema::dropIfExists('provider_input_prices');
    }
}
