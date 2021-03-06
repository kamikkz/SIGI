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
        // $this->call(UsersTableSeeder::class);
        $this->call(GeneralManagementsTableSeeder::class);
        $this->call(DependencesTableSeeder::class);

        $this->call(LifeCycleTableSeeder::class);
        $this->call(MacroprocessTableSeeder::class);
        $this->call(PeriodicityTableSeeder::class);
        $this->call(SeverityTableSeeder::class);
        $this->call(TemporalityTableSeeder::class);
        $this->call(FreccTableSeeder::class);

    }
}
