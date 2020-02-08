<?php

namespace App\Models;

use App\Enums\DBTables\DBTableData;
use Illuminate\Database\Eloquent\Model;

class CarColor extends Model
{
    // todo in the future add accessors and mutators

    protected $table = DBTableData::CAR_COLORS;

    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function insurances()
    {
        return $this->hasMany('App\Models\Insurance', 'car_color_id', 'id');
    }
}
