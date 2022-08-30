<?php

use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        https://moon-hero.site/raspolozenie_geroev/  heros|| have images
        $items = [
            'чабба',
            'аврора',
            'тесак',
            'корвус',
            'лютер',
            'зири',
            'руфус',
            'астарот',
            'галахад',
            'тристан',
            'исмаил',
            "к'арх",
            'маркус',
            'андвари',
            'ясмин',
            'эльмир',
            'цин мао',
            'сатори',
            'альванор',
            'майя',
            'арахна',
            'данте',
            'криста',
            'кира',
            'судья',
            'морриган',
            'селеста',
            'амира',
            'айзек',
            'кай',
            'джу',
            'небула',
            'себастьян',
            'моджо',
            'хайди',
            'йорген',
            'орион',
            'джинджер',
            'сорвиголова',
            'темная звезда',
            'ларс',
            'астрид и лукас',
            'айрис',
            'корнелиус',
            'безликий',
            'фокс',
            'лиен',
            'фобос',
            'артемис',
            'дориан',
            'пеппи',
            'джет',
            'тея',
            'гелиос',
            'лилит',
            'марта',
        ];

        foreach ($items as $item) {
            \Illuminate\Support\Facades\DB::table('heros')->insert([
                'name' => $item,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
