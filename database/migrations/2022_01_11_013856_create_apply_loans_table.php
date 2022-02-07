<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_loan');
            $table->integer('amount');
            $table->string('loan_purpose')->nullable();
            $table->string('name');
            $table->integer('gender');
            $table->string('email')->nullable();
            $table->integer('phone');
            $table->string('pob');
            $table->MEDIUMTEXT('message')->nullable();
            $table->string('national_card');
            $table->timestamp('read_at')->nullable();
            $table->string('comments')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('apply_loans');
    }
}
