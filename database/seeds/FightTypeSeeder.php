<?php

use Illuminate\Database\Seeder;

class FightTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['вг', 'мс', 'арена', 'гранд-арена', 'тренировка'];
        foreach ($items as $item) {
            \Illuminate\Support\Facades\DB::table('fight_types')->insert([
                'name' => $item,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
