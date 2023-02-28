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
        Schema::create('stunts', function (Blueprint $table) {
            $table->id();
            $table->longText('stunts')->nullable()->default("");
            $table->integer('refresh')->default(0);
            $table->integer('fp')->default(0);
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
        Schema::dropIfExists('stunts');
    }
};
