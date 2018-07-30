<?php

use Illuminate\Database\Seeder;
use App\Partenaire;

class PartenairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partenaire::create( [
            'name'=>'Bxl-Formation',
            'image'=>'qjCk122WZLRGcLJtZ9uuBr6UbwjFtl4FJiKFzydn.png',
            'created_at'=>'2018-07-27 08:17:17',
            'updated_at'=>'2018-07-27 08:17:17'
            ] );
                        
        Partenaire::create( [
            'name'=>'Digital-Belgium',
            'image'=>'el22NiHfPUKKHMHDDVL7zfQebanuxfZybToKgvl2.png',
            'created_at'=>'2018-07-27 08:17:40',
            'updated_at'=>'2018-07-27 08:17:40'
            ] );
                        
        Partenaire::create( [
            'name'=>'Google',
            'image'=>'hvX1GAHuMUjAKqDI0hhSN6SyKicxILNhllTcKfIZ.png',
            'created_at'=>'2018-07-27 08:18:01',
            'updated_at'=>'2018-07-27 08:18:01'
            ] );
                        
        Partenaire::create( [
            'name'=>'Maria 01',
            'image'=>'7hK8MScPWzjSkHXaZs5dR3Lco8ihwOZkJCOq3y0A.jpeg',
            'created_at'=>'2018-07-27 08:18:19',
            'updated_at'=>'2018-07-27 08:18:19'
            ] );
                        
        Partenaire::create( [
            'name'=>'Samsung',
            'image'=>'3Agt1eE7Mk1CaNSeZBWL49o4ESbPHWLQR8Lq0uhk.png',
            'created_at'=>'2018-07-27 08:18:47',
            'updated_at'=>'2018-07-27 08:18:47'
            ] );
                        
        Partenaire::create( [
            'name'=>'Smart-city',
            'image'=>'K9sZFQujeZQfUESZnr7WLkKrh4w1pC3bLZb1EcS6.png',
            'created_at'=>'2018-07-27 08:18:57',
            'updated_at'=>'2018-07-27 08:18:57'
            ] );
                        
        Partenaire::create( [
            'name'=>'ULB',
            'image'=>'emkU7Mb7NhZPdAtNhjGY20cVkiNgyBCouhFsH6qS.png',
            'created_at'=>'2018-07-27 08:19:06',
            'updated_at'=>'2018-07-27 08:19:06'
            ] );
    }
}
