<?php

use Faker\Provider\bg_BG\PhoneNumber;
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
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('sex');
            $table->string('phone_number')->unique();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('admins');
    }
};
