<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('my_characters')->insert([
            'name' => 'Biru Kumarizora',
            'type' => 2,
            'notes' => null,
            'user_id' => 1
        ]);
        DB::table('aspects')->insert([
            'highconcept' => 'Kendini kanıtlamaya çalışan, başına buyruk bir savaşçı',
            'trouble' => 'rekabetten kaçmaz, humanist',
            'relationship' => 'sınıf arkadaşlarım selimoth, acteon, ace ve ozzy üvey kardeşim',
            'aspect' => 'Risk benim gobek adim',
            'character_id' => 1
        ]);
        DB::table('stunts')->insert([
            'stunts' => "-Sopa kullanmakta ustalaştığım için yolu bulmam gerektiğinde sopamın üstünde durarak gözlem ve farkındalık skillerime +2 alıyorum.

            -Sopam Acklay'e dönüşüyor. Ninjatom ise akrep kuyruklu, kedi vücutlu ve baykuş kanatlı bir hayvana dönüşebiliyor.
            
            -El hareketi ile istediğim bir silahıma dash atabilirim. 
            
            -Sopamla dönmeye başlayınca savunma ve saldırı amaçlı YD+2, ninjatomla ise +2
            
            -Sopamla rakibime dezavantaj yaratmak istersem zarıma +2 alırım, ninjatomla +2
            
            - Sopamın boyutunu 4.5m'ye kadar uzayabilir.
            
            *Ruh Gücümü silahıma ya da bedenime verebilirim. (YD+2 ya da Beden+2)
            
            Items:
            - Nick'in yüzüğü: 4 tur ruhumu içinde biriktirirsem, iki tur boyunca zarlarıma +2 alırım
            
            468g + 589g",
            'refresh' => 0,
            'fp' => 0,
            'character_id' => 1
        ]);
        DB::table('vitals')->insert([
            'physical' => 4,
            'mental' => 3,
            'character_id' => 1
        ]);
        DB::table('skills')->insert([
            'character_id' => 1,
            'academics' => 0,
            'athletics' => 5,
            'burglary' => 0,
            'contacts' => 0,
            'crafts' => 0,
            'deceive' => 1,
            'drive' => 0,
            'empathy' => 1,
            'fight' => 6,
            'investigate' => 3,
            'lore' => 0,
            'notice' => 2,
            'physique' => 3,
            'provoke' => 0,
            'rapport' => 1,
            'resources' => 0,
            'shoot' => 0,
            'stealth' => 0,
            'will' => 0,
        ]);
    }
}
