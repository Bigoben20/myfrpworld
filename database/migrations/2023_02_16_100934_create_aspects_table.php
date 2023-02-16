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
        Schema::create('aspects', function (Blueprint $table) {
            $table->id();
            $table->string('highconcept');
            $table->string('trouble');
            $table->string('relationship');
            $table->string('aspect')->nullable();
            $table->string('aspect2')->nullable();
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
        Schema::dropIfExists('aspects');
    }
};
