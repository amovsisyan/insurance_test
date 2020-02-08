<?php

use Illuminate\Database\Seeder;

class CarDriveTrainTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Enums\CarDriveTrainTypesEnum::DRIVE_TRAIN_TYPES as $type) {
            \App\Models\CarDriveTrainType::firstOrCreate(
                ['name' => $type],
                ['name' => $type]
            );
        }
    }
}
