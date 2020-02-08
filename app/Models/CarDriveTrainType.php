<?php

namespace App\Models;

use App\Enums\DBTables\DBTableData;
use Illuminate\Database\Eloquent\Model;

class CarDriveTrainType extends Model
{
    // todo in the future add accessors and mutators

    protected $table = DBTableData::CAR_DRIVETRAIN_TYPES;

    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function carModels()
    {
        return $this->belongsToMany(
            'App\Models\CarModel',
            DBTableData::CAR_DRIVETRAIN_TYPES_CAR_MODELS,
            'model_id',
            'drivetrain_type_id'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function insurances()
    {
        return $this->hasMany('App\Models\Insurance', 'car_drivetrain_type_id', 'id');
    }
}
