<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsHasTagsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'projets_has_tags';

    /**
     * Run the migrations.
     * @table projets_has_tags
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('projets_id');
            $table->unsignedInteger('tags_id');

            $table->index(["tags_id"], 'fk_projets_has_tags_tags1_idx');

            $table->index(["projets_id"], 'fk_projets_has_tags_projets1_idx');


            $table->foreign('projets_id', 'fk_projets_has_tags_projets1_idx')
                ->references('id')->on('projets')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tags_id', 'fk_projets_has_tags_tags1_idx')
                ->references('id')->on('tags')
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