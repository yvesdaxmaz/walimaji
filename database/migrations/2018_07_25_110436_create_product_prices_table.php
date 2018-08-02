<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPricesTable extends Migration
{

    public function up()
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');
            $table->integer('product_id')->references('id')->on('productions')->onDelete('restrict');;
            $table->integer('actor_id')->references('id')->on('users')->onDelete('restrict');;
            $table->double('price_with_tax');
            $table->double('price_without_tax');
            $table->dateTime('date_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_prices');
    }
}
