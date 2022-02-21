<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompliantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliants', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->integer('id_loan_type');
            $table->string('email')->nullable();
            $table->integer('phone');
            // $table->date('date');
            $table->string('subject')->nullable();
            $table->string('compliant_description')->nullable();
            $table->string('message')->nullable();
            $table->timestamp('read_at')->nullable();
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
        Schema::dropIfExists('compliants');
    }
}
