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
            $table->increments('id');
            $table->integer('produc_id');
            $table->integer('transformer_id');
            $table->string('product_state');
            $table->string('initial_quantity');
            $table->string('current_quantity');
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
