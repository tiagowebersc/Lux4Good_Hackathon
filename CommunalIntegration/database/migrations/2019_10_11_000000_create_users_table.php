<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $tableName = 'users';
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('town_id')->unsigned()->nullable();
            $table->integer('role_id')->unsigned();
            $table->string('name', 60);
            $table->string('email', 60);
            $table->string('email_verified_at', 100)->nullable();
            $table->string('password', 100);
            $table->date('created_at');
            $table->integer('created_by');
            $table->date('updated_at');
            $table->integer('updated_by');
            $table->tinyInteger('active');
            $table->index(["role_id"], 'fk_user_role1_idx');
            $table->index(["town_id"], 'fk_user_town_idx');
            $table->unique(["email"], 'email_UNIQUE');
            $table->foreign('town_id', 'fk_user_town_idx')
                ->references('id')->on('town')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('role_id', 'fk_user_role1_idx')
                ->references('id')->on('role')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->rememberToken();
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
