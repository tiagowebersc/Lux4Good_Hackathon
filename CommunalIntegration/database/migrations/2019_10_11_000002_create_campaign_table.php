<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCampaignTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'campaign';
    /**
     * Run the migrations.
     * @table campaign
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('town_id')->unsigned();
            $table->string('description', 45);
            $table->date('created_at');
            $table->integer('created_by');
            $table->date('updated_at');
            $table->integer('updated_by');
            $table->tinyInteger('active');
            $table->index(["town_id"], 'fk_project_town1_idx');
            $table->foreign('town_id', 'fk_project_town1_idx')
                ->references('id')->on('town')
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
