<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cruds', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 50)->nullable();
            $table->string('lname', 50)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('email', 50)->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('marital_status', 10)->nullable();
            $table->string('bio')->nullable();
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
        Schema::dropIfExists('user_cruds');
    }
};
