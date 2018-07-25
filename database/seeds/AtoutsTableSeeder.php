<?php

use Illuminate\Database\Seeder;

class AtoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atouts')->insert([
            'name' => 'Tendance',
            'content' => 'The Factory est toujours dans les tendances du moment grâce aux partenariats privilégiés que nous avons développés : Facebook, Google et Samsung.',
        ]);

        DB::table('atouts')->insert([
            'name' => 'Moins cher',
            'content' => 'Les services proposés par nos jeunes développeurs sont à des prix compétitifs. Grâce à notre businessmodel unique, alliant coaching de jeunes recrues et mentoring de développeurs experts, nos prix vous raviront à coup sûr.',
        ]);

        DB::table('atouts')->insert([
            'name' => 'Équipe pluridisciplinaire',
            'content' => 'Notre équipe de développeurs full stack est composée de tout type de profil : Webdesigner, Marketeer, Programmeur, UX Designer. Cette approche multidisciplinaire nous permet de développer nos projets entièrement en interne.',
        ]);

        DB::table('atouts')->insert([
            'name' => 'Flexibilité',
            'content' => 'Nous nous adaptons facilement et rapidement aux besoins des clients. Nous travaillons en temps et en heures et sommes capables fournir un travail spécifique sur une courte durée.',
        ]);
    }
}
