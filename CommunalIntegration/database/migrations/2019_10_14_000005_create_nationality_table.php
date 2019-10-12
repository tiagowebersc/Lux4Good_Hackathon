<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNationalityTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'nationality';

    /**
     * Run the migrations.
     * @table nationality
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('country_id');
            $table->integer('outcome_id')->unsigned();
            $table->date('created_at');
            $table->integer('created_by');
            $table->date('last_modification_at');
            $table->integer('last_modification_by');
            $table->tinyInteger('active');

            $table->index(["outcome_id"], 'fk_nationality_outcome1_idx');


            $table->foreign('outcome_id', 'fk_nationality_outcome1_idx')
                ->references('id')->on('outcome')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

