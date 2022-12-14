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
        Schema::create('pharmacy_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pharmacy_id')->unsigned();
            $table->string('Telegram');
            $table->string('Whatsapp');
            $table->string('Facebook');
            $table->string('Instagram');
            $table->string('Twitter');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pharmacy_id')
            ->references('id')
            ->on('pharmacies')
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
        Schema::dropIfExists('pharmacy_contacts');
    }
};
