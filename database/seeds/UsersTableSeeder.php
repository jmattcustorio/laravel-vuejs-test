<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin1',
            'email'=>'a@admin1.com',
            'password'=>bcrypt('password'),

        ]);

        DB::table('users')->insert([
            'name'=>'admin2',
            'email'=>'a@admin2.com',
            'password'=>bcrypt('password'),

        ]);
        DB::table('users')->insert([
            'name'=>'admin3',
            'email'=>'a@admin3.com',
            'password'=>bcrypt('password'),

        ]);
    }
}
