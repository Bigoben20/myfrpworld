<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('my_characters')->onDelete('cascade');
            $table->integer('academics')->default(0);
            $table->integer('athletics')->default(0);
            $table->integer('burglary')->default(0);
            $table->integer('contacts')->default(0);
            $table->integer('crafts')->default(0);
            $table->integer('deceive')->default(0);
            $table->integer('drive')->default(0);
            $table->integer('empathy')->default(0);
            $table->integer('fight')->default(0);
            $table->integer('investigate')->default(0);
            $table->integer('lore')->default(0);
            $table->integer('notice')->default(0);
            $table->integer('physique')->default(0);
            $table->integer('provoke')->default(0);
            $table->integer('rapport')->default(0);
            $table->integer('resources')->default(0);
            $table->integer('shoot')->default(0);
            $table->integer('stealth')->default(0);
            $table->integer('will')->default(0);
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
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn([
                'athletics',
                'burglary',
                'contacts',
                'crafts',
                'deceive',
                'drive',
                'empathy',
                'fight',
                'investigate',
                'lore',
                'notice',
                'physique',
                'provoke',
                'rapport',
                'resources',
                'shoot',
                'stealth',
                'will',
            ]);
        });
    }
};
