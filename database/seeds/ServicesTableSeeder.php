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
            'logo' => 'fas fa-code',
            'name' => 'Developpement web',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac volutpat leo, quis orci.'
        ]);
            
        DB::table('services')->insert([
            'logo' => 'fas fa-drafting-compass',
            'name' => 'Création graphique',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac volutpat leo, quis orci.'
        ]);
                
        DB::table('services')->insert([
            'logo' => 'fas fa-chart-line',
            'name' => 'E-marketing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac volutpat leo, quis orci.'
        ]);
    }
}
