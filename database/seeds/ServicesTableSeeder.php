<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Developpement web',
        ]);
        
        DB::table('services')->insert([
            'name' => 'Création graphique',
        ]);

        DB::table('services')->insert([
            'name' => 'E-marketing',
        ]);
    }
}
