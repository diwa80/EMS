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
            'name'=>'Rossy Phyual',
            'email'=>'rossy@beautiful.com',
            'password'=>bcrypt('password'),
            'avatar' => 'images/users/1585821853.jpg',
            
        ]);
        DB::table('users')->insert([
            'name'=>'Diwakar ',
            'email'=>'diwakardulal14@gmail.com',
            'password'=>bcrypt('password'),
            'avatar' => 'images/users/1585821388.jpg',
            
        ]);
    }
}
