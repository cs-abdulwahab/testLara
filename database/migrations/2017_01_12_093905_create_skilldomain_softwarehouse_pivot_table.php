<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkilldomainSoftwarehousePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilldomain_softwarehouse', function (Blueprint $table) {
            $table->integer('skilldomain_id')->unsigned()->index();
            $table->foreign('skilldomain_id')->references('id')->on('skilldomains')->onDelete('cascade');
            $table->integer('softwarehouse_id')->unsigned()->index();
            $table->foreign('softwarehouse_id')->references('id')->on('softwarehouses')->onDelete('cascade');
            $table->primary(['skilldomain_id', 'softwarehouse_id'],'skill_software_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skilldomain_softwarehouse');
    }
}
