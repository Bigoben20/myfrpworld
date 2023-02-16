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
        Schema::create('vitals', function (Blueprint $table) {
            $table->id();
            $table->integer('physical')->default(0);
            $table->integer('mental')->default(0);
            $table->string('2')->nullable();
            $table->string('4')->nullable();
            $table->string('6')->nullable();
            $table->string('8')->nullable();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('my_characters')->onDelete('cascade');
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
        Schema::dropIfExists('vitals');
    }
};
