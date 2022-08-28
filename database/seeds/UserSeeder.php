<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ['Метис'];
        foreach ($users as $user) {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'name' => $user,
                'email' => 'admin@mail.ru',
                'password' => \Illuminate\Support\Facades\Hash::make('sudakov14'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
