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
         $this->call(CarColorsSeeder::class);
         $this->call(CarCompaniesSeeder::class);
         $this->call(CarDriveTrainTypesSeeder::class);
         $this->call(CarModelsSeeder::class);
         $this->call(CarDriveTrainTypeToCarModelRelation::class);
    }
}
