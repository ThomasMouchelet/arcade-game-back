<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $carbon = new Carbon();
        DB::table('parties')->insert([
            'username' => 'Corobizar',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(0,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Treasure Hunter',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(0,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Gotaga',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(0,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'SixenTv',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'FuuRy_Off',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'TraYtoN',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => '_ZeyR',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'ClaraRDK',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'SoDLire',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Traaz',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'MonsieurLeChatTV',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Buchx',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Akela_Live',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Fueurjung',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Elalia_',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Berluu',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Salty_Swany',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Theorus_',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Doctor_Wey',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Sym_FNX',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Mpe__',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Zco666',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Ayakaschi',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Norby',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'ESKc',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'iFoLz93',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'MymyLive',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'TeLo',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'xSKIDIX',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Featrana',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'KptainPE',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Hexakil',
            'avatar' => 1,
            'score' => rand(99,999),

        ]);
        DB::table('parties')->insert([
            'username' => 'GakoGoka',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Scyllaya',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'TibiChik',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Aknaton',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'ratek',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'AbyssalProjectEsport',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'SpyNerd',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'NWDark',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'LaureBee',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'shironamie',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Sowivi',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'amrosb',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'bazy_',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'LoWkiiCS',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Sinatraa',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Reflex',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'ScreaM_',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'TenZ_CS',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Mixwell',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Shaolele',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Faker',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Rekkles',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Soaz',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'Maestro99_',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'FuZZioAR',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);
        DB::table('parties')->insert([
            'username' => 'JeanRTV',
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ]);

    }
}
