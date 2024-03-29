<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutcomeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'outcome';

    /**
     * Run the migrations.
     * @table outcome
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('action_id')->unsigned();
            $table->string('age')->nullable();
            $table->string('income')->nullable();
            $table->integer('stay_duration_country')->nullable();
            $table->integer('stay_duration_town')->nullable();
            $table->integer('child')->nullable();
            $table->integer('country_of_birth_id')->unsigned()->nullable();
            $table->string('gender')->nullable();
            $table->string('education')->nullable();
            $table->integer('marital_status')->nullable();
            $table->integer('professional_status')->nullable();
            $table->date('created_at')->nullable();
            $table->integer('created_by')->nullable();
            $table->date('updated_at')->nullable();
            $table->integer('updated_by')->nullable();

            $table->index(["action_id"], 'fk_outcome_action1_idx');

            $table->index(["country_of_birth_id"], 'fk_outcome_country1_idx');


            $table->foreign('action_id', 'fk_outcome_action1_idx')
                ->references('id')->on('action')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('country_of_birth_id', 'fk_outcome_country1_idx')
                ->references('id')->on('country')
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
