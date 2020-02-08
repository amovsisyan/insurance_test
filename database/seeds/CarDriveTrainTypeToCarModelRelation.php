<?php

use Illuminate\Database\Seeder;

class CarDriveTrainTypeToCarModelRelation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grandCherokee = \App\Models\CarModel::where(['name' => \App\Enums\CarModelsEnum::CAR_MODEL_JEEP_GRAND_CHEROKEE])->first();

        if ($grandCherokee) {
            foreach (\App\Enums\CarDriveTrainTypesEnum::DRIVE_TRAIN_TYPES as $driveType) {
                $driveTypeModel = \App\Models\CarDriveTrainType::where(['name' => $driveType])->first();
                if ($driveTypeModel) {
                    $checkData =                         [
                        'model_id' => $grandCherokee->id,
                        'drivetrain_type_id' => $driveTypeModel->id
                    ];
                    $relationalTable = \Illuminate\Support\Facades\DB::table(\App\Enums\DBTables\DBTableData::CAR_DRIVETRAIN_TYPES_CAR_MODELS);

                    $relation = $relationalTable->where($checkData)->first();

                    if (!$relation) {
                        $relationalTable->insert($checkData);
                    }
                }
            }
        }
    }
}
