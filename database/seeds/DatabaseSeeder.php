<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TagsTableSeeder::class,
            UsersTableSeeder::class,
            SkillsTableSeeder::class,
            AtoutsTableSeeder::class,
            ClientsTableSeeder::class,
            ServicesTableSeeder::class,
            CategoriesTableSeeder::class,
            PartenairesTableSeeder::class,
            ]);
        
    }
}
