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
            $table->integer('academics')->nullable()->default(0);
            $table->integer('athletics')->nullable()->default(0);
            $table->integer('burglary')->nullable()->default(0);
            $table->integer('contacts')->nullable()->default(0);
            $table->integer('crafts')->nullable()->default(0);
            $table->integer('deceive')->nullable()->default(0);
            $table->integer('drive')->nullable()->default(0);
            $table->integer('empathy')->nullable()->default(0);
            $table->integer('fight')->nullable()->default(0);
            $table->integer('investigate')->nullable()->default(0);
            $table->integer('lore')->nullable()->default(0);
            $table->integer('notice')->nullable()->default(0);
            $table->integer('physique')->nullable()->default(0);
            $table->integer('provoke')->nullable()->default(0);
            $table->integer('rapport')->nullable()->default(0);
            $table->integer('resources')->nullable()->default(0);
            $table->integer('shoot')->nullable()->default(0);
            $table->integer('stealth')->nullable()->default(0);
            $table->integer('will')->nullable()->default(0);
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
                'academics',
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