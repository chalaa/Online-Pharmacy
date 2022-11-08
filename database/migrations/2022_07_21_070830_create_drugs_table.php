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
        Schema::create('drugs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pharmacy_id')->unsigned();
            $table->string('drug_name');
            $table->longText('drug_description');
            $table->double('drug_price');
            $table->integer('drug_quantity');
            $table->string('drug_image');
            $table->string('drug_form');
            $table->string('drug_dosage');
            $table->string('drug_manufacturer');
            $table->dateTime('drug_expiry_date');
            $table->dateTime('drug_manufacture_date');
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
        Schema::dropIfExists('drugs');
    }
};
