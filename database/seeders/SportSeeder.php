<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sport::create([
          'sport_name' => 'サッカー',
        ]);
        
         Sport::create([
          'sport_name' => '野球',
        ]);
        
         Sport::create([
          'sport_name' => 'バスケットボール',
        ]);
        
         Sport::create([
          'sport_name' => 'サッカー',
        ]);
        
         Sport::create([
          'sport_name' => 'バレーボール',
        ]);
        
         Sport::create([
          'sport_name' => 'テニス',
        ]);
        
         Sport::create([
          'sport_name' => 'ラグビー',
        ]);
        
         Sport::create([
          'sport_name' => 'スキー・スノボ',
        ]);
        
         Sport::create([
          'sport_name' => 'その他のスポーツ',
        ]);
    }
}
