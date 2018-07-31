<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransformedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transformed_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');
            $table->integer('product_id')->references('id')->on('productions')->onDelete('restrict');
            $table->integer('transformer_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('product_state');
            $table->string('new_image')->nullable();
            $table->integer('initial_quantity');
            $table->integer('current_quantity');
            $table->string('entry_date');
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
        Schema::dropIfExists('transformed_products');
    }
}
