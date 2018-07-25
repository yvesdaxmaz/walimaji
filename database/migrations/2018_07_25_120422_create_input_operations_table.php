<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('input_id')->references('id')->on('product_inputs')
                ->onDelete('restrict');
            $table->integer('provider_id')->references('id')->on('users')
                ->onDelete('restrict');
            $table->integer('producer_id')->references('id')->on('users')
                ->onDelete('restrict');
            $table->integer('quantity');
            $table->dateTime('date_time');
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
        Schema::dropIfExists('input_operations');
    }
}
