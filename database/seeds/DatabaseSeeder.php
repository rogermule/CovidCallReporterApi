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
         $this->call(RoleSeeder::class);
         $this->call(CallRumorTypesSeeder::class);
         $this->call(RegionsSeeder::class);
         $this->call(SymptomsSeeder::class);
    }
}
