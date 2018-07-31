<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_inputs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');
            $table->string('type');
            $table->string('designation');
            $table->string('description')->nullable();
            $table->integer('type_id')->references('id')->on('input_types')->onDelete('restrict');
            $table->string('image')->nullable();
            $table->integer('provider_id')->references('id')->on('users')->onDelete('restrict');
            $table->integer('initial_quantity');
            $table->integer('current_quantity');
            $table->date('entry_date');
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
        Schema::dropIfExists('product_inputs');
    }
}
