<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_module', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('module_id');
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('module_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_module');
    }
}
