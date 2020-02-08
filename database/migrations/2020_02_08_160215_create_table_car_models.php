<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarModels extends Migration
{
    private $table;

    public function __construct() {
        $this->table = \App\Enums\DBTables\DBTableData::CAR_MODELS;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            // todo implement soft delete
            $table->bigIncrements('id');
            $table->string('name');

            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')
                ->references('id')
                ->on(\App\Enums\DBTables\DBTableData::CAR_COMPANIES)
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();        });
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
