<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateActionTargetGroupTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'action_target_group';
    /**
     * Run the migrations.
     * @table action_target_group
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('target_group_id');
            $table->integer('action_id')->unsigned();
            $table->date('created_at');
            $table->integer('created_by');
            $table->date('last_modification_at');
            $table->integer('last_modification_by');
            $table->tinyInteger('active');
            $table->index(["action_id"], 'fk_action_target_group_action1_idx');
            $table->foreign('action_id', 'fk_action_target_group_action1_idx')
                ->references('id')->on('action')
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
