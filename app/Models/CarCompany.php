<?php

namespace App\Models;

use App\Enums\DBTables\DBTableData;
use Illuminate\Database\Eloquent\Model;

class CarCompany extends Model
{
    // todo in the future add accessors and mutators

    protected $table = DBTableData::CAR_COMPANIES;

    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carModels()
    {
        return $this->hasMany('App\Models\CarModel', 'company_id', 'id');
    }
}
