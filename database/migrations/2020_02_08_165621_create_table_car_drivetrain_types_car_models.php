<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarDrivetrainTypesCarModels extends Migration
{
    private $table;

    public function __construct() {
        $this->table = \App\Enums\DBTables\DBTableData::CAR_DRIVETRAIN_TYPES_CAR_MODELS;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('model_id')->unsigned();
            $table->foreign('model_id')
                ->references('id')
                ->on(\App\Enums\DBTables\DBTableData::CAR_MODELS)
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('drivetrain_type_id')->unsigned();
            $table->foreign('drivetrain_type_id')
                ->references('id')
                ->on(\App\Enums\DBTables\DBTableData::CAR_DRIVETRAIN_TYPES)
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
