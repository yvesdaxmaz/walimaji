<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('image');
            $table->integer('product_id')->references('id')->on('products')->onDelete('restrict');
            $table->integer('producer_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('state');
            $table->integer('initial_quantity');
            $table->integer('current_quantity');
            $table->date('date_production');
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
        Schema::dropIfExists('productions');
    }
}
