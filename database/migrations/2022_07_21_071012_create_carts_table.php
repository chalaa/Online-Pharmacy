<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('drug_id')->unsigned();
            $table->integer('quantity');
            $table->integer('total_price');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('customer_id')
            ->references('id')
            ->on('customers')
            ->onDelete('cascade');
            $table->foreign('drug_id')
            ->references('id')
            ->on('drugs')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
