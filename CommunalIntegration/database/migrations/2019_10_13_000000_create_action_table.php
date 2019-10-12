<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateActionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'action';
    /**
     * Run the migrations.
     * @table action
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
            $table->integer('user_editor_id')->unsigned();
            $table->integer('user_responsible_id')->unsigned();
            $table->integer('objective_id')->unsigned();
            $table->integer('theme_id')->unsigned();
            $table->string('partner', 150);
            $table->string('date', 50)->nullable();
            $table->date('created_at');
            $table->integer('created_by');
            $table->date('last_modification_at');
            $table->integer('last_modification_by');
            $table->tinyInteger('active');
            $table->index(["theme_id"], 'fk_action_theme1_idx');
            $table->index(["user_editor_id"], 'fk_action_user1_idx');
            $table->index(["campaign_id"], 'fk_action_campaign1_idx');
            $table->index(["user_responsible_id"], 'fk_action_user2_idx');
            $table->index(["objective_id"], 'fk_action_objective1_idx');
            $table->foreign('campaign_id', 'fk_action_campaign1_idx')
                ->references('id')->on('campaign')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('user_editor_id', 'fk_action_user1_idx')
                ->references('id')->on('user')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('user_responsible_id', 'fk_action_user2_idx')
                ->references('id')->on('user')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('objective_id', 'fk_action_objective1_idx')
                ->references('id')->on('objective')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('theme_id', 'fk_action_theme1_idx')
                ->references('id')->on('theme')
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
