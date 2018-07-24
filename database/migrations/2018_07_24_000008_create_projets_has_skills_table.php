<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsHasSkillsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'projets_has_skills';

    /**
     * Run the migrations.
     * @table projets_has_skills
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('projets_id');
            $table->unsignedInteger('skills_id');

            $table->index(["projets_id"], 'fk_projets_has_skills_projets1_idx');

            $table->index(["skills_id"], 'fk_projets_has_skills_skills1_idx');


            $table->foreign('projets_id', 'fk_projets_has_skills_projets1_idx')
                ->references('id')->on('projets')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('skills_id', 'fk_projets_has_skills_skills1_idx')
                ->references('id')->on('skills')
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
