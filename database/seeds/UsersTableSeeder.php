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
            'name' => 'Jonathan Flion',
            'email' => 'jnflion@gmail.com',
            'password' => bcrypt('azerty'),
            'remember_token' => str_random(10),
        ]);
    }
}
