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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('cart_id')->unsigned();
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_amount');
            $table->string('payment_currency');
            $table->string('payment_transaction_id');
            $table->string('payment_transaction_status');
            $table->string('payment_transaction_message');
            $table->string('payment_transaction_response');
            $table->string('payment_transaction_response_code');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('customer_id')
            ->references('id')
            ->on('customers')
            ->onDelete('cascade');
            $table->foreign('cart_id')
            ->references('id')
            ->on('carts')
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
        Schema::dropIfExists('payments');
    }
};
