<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInsurances extends Migration
{
    private $table;

    public function __construct() {
        $this->table = \App\Enums\DBTables\DBTableData::INSURANCES;
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
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on(\App\Enums\DBTables\DBTableData::USERS)
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->bigInteger('car_model_id')->unsigned();
            $table->foreign('car_model_id')
                ->references('id')
                ->on(\App\Enums\DBTables\DBTableData::CAR_MODELS)
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->bigInteger('car_color_id')->unsigned();
            $table->foreign('car_color_id')
                ->references('id')
                ->on(\App\Enums\DBTables\DBTableData::CAR_COLORS)
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->bigInteger('car_drivetrain_type_id')->unsigned();
            $table->foreign('car_drivetrain_type_id')
                ->references('id')
                ->on(\App\Enums\DBTables\DBTableData::CAR_DRIVETRAIN_TYPES)
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->integer('millage')->unsigned()->default(0);

            $table->tinyInteger('is_committed')->unsigned()->default(0);

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
