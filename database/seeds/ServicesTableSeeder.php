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
            'logo' => 'test',
            'name' => 'Developpement web',
        ]);
        
        DB::table('services')->insert([
            'logo' => 'test',
            'name' => 'Création graphique',
        ]);

        DB::table('services')->insert([
            'logo' => 'test',
            'name' => 'E-marketing',
        ]);
    }
}
