<?php

use Illuminate\Database\Seeder;

class CountryStateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        Countries
        $this->command->info('Countries table seeding!');
        $this->call(CountriesTableSeeder::class);
        $this->command->info('Countries table seeded!');

//        States
        $this->command->info('States table seeding!');
        $this->call(StatesTableSeeder::class);
        $this->command->info('States table seeded!');


        //        Cities
        $this->command->info('Cities table seeding!');
        $this->call(CitiesTableSeeder::class);
        $this->command->info('Cities table seeded!');

    }
}
