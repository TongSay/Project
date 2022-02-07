<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_en')->nullable();
            $table->string('title_kh')->nullable();
            $table->MEDIUMTEXT('description_en')->nullable();
            $table->MEDIUMTEXT('description_kh')->nullable();
            $table->MEDIUMTEXT('requirement_en')->nullable();
            $table->MEDIUMTEXT('requirement_kh')->nullable();
            $table->MEDIUMTEXT('content_en')->nullable();
            $table->MEDIUMTEXT('content_kh')->nullable();
            $table->integer('id_user');
            $table->integer('id_job_type');
            $table->string('image');
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
        Schema::dropIfExists('jobs');
    }
}
