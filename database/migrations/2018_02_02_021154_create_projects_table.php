<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('remarks');
            $table->string('department');
            $table->string('ward');
            $table->string('subward');
            $table->string('location');
            $table->string('sublocation');
            $table->integer('budget');
            $table->integer('expenditure');
            $table->string('financialyear');
            $table->string('sourcefunds');
            $table->string('implementagency');
            $table->string('status');            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
