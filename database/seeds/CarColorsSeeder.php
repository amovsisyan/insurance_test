<?php

use Illuminate\Database\Seeder;

class CarColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Enums\CarColorsEnum::COLORS as $color) {
            \App\Models\CarColor::firstOrCreate(
                ['name' => $color],
                ['name' => $color]
            );
        }
    }
}
