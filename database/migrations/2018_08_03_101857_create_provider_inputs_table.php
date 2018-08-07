<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->string('description');
            $table->integer('refInput')->references('id')->on('provider_input_refs')->onDelete('restrict');
            $table->integer('idProvider')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('provider_inputs');
    }
}
