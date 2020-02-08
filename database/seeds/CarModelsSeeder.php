<?php

use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Enums\CarModelsEnum::CAR_MODELS as $company => $models) {
            $company = \App\Models\CarCompany::where(['name' => $company])->first();

            if ($company) {
                foreach ($models as $model) {
                    \App\Models\CarModel::firstOrCreate(
                        ['name' => $model, 'company_id' => $company->id],
                        ['name' => $model, 'company_id' => $company->id]
                    );
                }
            }
        }
    }
}
