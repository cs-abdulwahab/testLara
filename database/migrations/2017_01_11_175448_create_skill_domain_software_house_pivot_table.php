<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkill_domainSoftware_housePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_domain_software_house', function (Blueprint $table) {
            $table->integer('skill_domain_id')->unsigned()->index();
            $table->foreign('skill_domain_id')->references('id')->on('skill_domains')->onDelete('cascade');
            $table->integer('software_house_id')->unsigned()->index();
            $table->foreign('software_house_id')->references('id')->on('software_houses')->onDelete('cascade');
            $table->primary(['skill_domain_id', 'software_house_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skill_domain_software_house');
    }
}
