<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_job');
            $table->string('job_name');
            $table->string('other_job')->nullable();
            $table->string('name');
            $table->integer('gender');
            $table->string('email')->nullable();
            $table->integer('phone');
            $table->date('dob');
            $table->string('pob');
            $table->MEDIUMTEXT('remark')->nullable();
            $table->string('cv');
            $table->string('national_card')->nullable();
            $table->string('message')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamp('read_at')->nullable();
            
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
        Schema::dropIfExists('apply_jobs');
    }
}
