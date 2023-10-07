<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Location', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Status');
        });

        Schema::create('Company', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Status');
        });

        Schema::create('Job Type', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Status');
        });

        Schema::create('JOB', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Salary');
            $table->integer('CompanyId');
            $table->integer('TypeId');
            $table->integer('LocationId');
            $table->text('Description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::dropIfExists('table');
    // }
};
