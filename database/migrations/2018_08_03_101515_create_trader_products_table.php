<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trader_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->string('description');
            $table->integer('refProduct')->references('id')->on('trader_product_refs')->onDelete('restrict');
            $table->integer('idTrader')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('trader_products');
    }
}
