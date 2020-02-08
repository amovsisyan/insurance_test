<?php

namespace App\Models;

use App\Enums\DBTables\DBTableData;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    // todo in the future add accessors and mutators

    protected $table = DBTableData::INSURANCES;

    protected $fillable = [
        'user_id',
        'car_model_id',
        'car_color_id',
        'car_drivetrain_type_id',
        'millage',
        'image_path',
        'is_committed',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo('App\Models\CarColor', 'car_color_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driveTrainType()
    {
        return $this->belongsTo('App\Models\CarDriveTrainType', 'car_drivetrain_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carModel()
    {
        return $this->belongsTo('App\Models\CarModel', 'car_model_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
