<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransformerProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transformer_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->string('description');
            $table->integer('refProduct')->references('id')->on('transformer_product_refs')->onDelete('restrict');
            $table->integer('idTransformer');
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
        Schema::dropIfExists('transformer_products');
    }
}
