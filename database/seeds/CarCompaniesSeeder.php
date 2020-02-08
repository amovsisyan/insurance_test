<?php

use Illuminate\Database\Seeder;

class CarCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Enums\CarCompaniesEnum::COMPANIES as $company) {
            \App\Models\CarCompany::firstOrCreate(
                ['name' => $company],
                ['name' => $company]
            );
        }
    }
}
