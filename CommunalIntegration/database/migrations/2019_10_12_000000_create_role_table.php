<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateRoleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'role';
    /**
     * Run the migrations.
     * @table role
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45);
            $table->date('created_at');
            $table->integer('created_by');
            $table->date('last_modification_at');
            $table->integer('last_modification_by');
            $table->tinyInteger('active');
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
