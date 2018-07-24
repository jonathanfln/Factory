<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'projets';

    /**
     * Run the migrations.
     * @table projets
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('categories_id');
            $table->string('name', 45);
            $table->string('image', 45);
            $table->text('content');

            $table->index(["categories_id"], 'fk_projets_categories_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('categories_id', 'fk_projets_categories_idx')
                ->references('id')->on('categories')
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
       Schema::dropIfExists($this->set_schema_table);
     }
}
