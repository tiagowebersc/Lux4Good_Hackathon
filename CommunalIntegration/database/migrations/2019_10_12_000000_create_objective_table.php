<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateObjectiveTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'objective';
    /**
     * Run the migrations.
     * @table objective
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description', 45);
            $table->integer('campaign_id')->unsigned();
            $table->date('created_at');
            $table->integer('created_by');
            $table->date('updated_at');
            $table->integer('updated_by');
            $table->tinyInteger('active');
            $table->index(["campaign_id"], 'fk_objective_campaign1_idx');
            $table->foreign('campaign_id', 'fk_objective_campaign1_idx')
                ->references('id')->on('campaign')
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
