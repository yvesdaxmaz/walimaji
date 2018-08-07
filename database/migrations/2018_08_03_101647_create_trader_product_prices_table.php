<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraderProductPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trader_product_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->double('priceWithTax');
            $table->double('priceWithoutTax');
            $table->dateTime('dateTime');
            $table->integer('idProduct')->references('id')->on('trader_products')->onDelete('restrict');
            $table->integer('idTrader');
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
        Schema::dropIfExists('trader_product_prices');
    }
}
