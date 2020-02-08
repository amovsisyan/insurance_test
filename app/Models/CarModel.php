<?php

namespace App\Models;

use App\Enums\DBTables\DBTableData;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    // todo in the future add accessors and mutators

    protected $table = DBTableData::CAR_MODELS;

    protected $fillable = [
        'name', 'company_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Models\CarCompany', 'car_color_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function driveTrainType()
    {
        return $this->belongsToMany(
            'App\Models\CarDriveTrainType',
            DBTableData::CAR_DRIVETRAIN_TYPES_CAR_MODELS,
            'drivetrain_type_id',
            'model_id'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function insurances()
    {
        return $this->hasMany('App\Models\Insurance', 'car_model_id', 'id');
    }
}
