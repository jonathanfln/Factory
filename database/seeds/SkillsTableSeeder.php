<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create( [
            'name'=>'Laravel',
            'logo'=>'fab fa-laravel',
            'created_at'=>'2018-07-26 06:03:45',
            'updated_at'=>'2018-07-26 06:10:09'
        ] );
                    
        Skill::create( [
            'name'=>'HTML',
            'logo'=>'fab fa-html5',
            'created_at'=>'2018-07-26 06:11:59',
            'updated_at'=>'2018-07-26 06:11:59'
        ] );
                    
        Skill::create( [
            'name'=>'CSS',
            'logo'=>'fab fa-css3-alt',
            'created_at'=>'2018-07-26 06:28:49',
            'updated_at'=>'2018-07-26 06:28:49'
        ] );
    }
}
