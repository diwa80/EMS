<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname')->nullable();
            $table->string('email')->nullable();
            $table->string('uname')->nullable();
            $table->string('password')->nullable();
            $table->biginteger('phone')->nullable();
            $table->string('position')->nullable();
            $table->integer('salary')->nullable();
            $table->date('hired_date')->nullable();
            $table->string('profile_image')->nullable();
            $table->softDeletes();
 

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
        Schema::dropIfExists('employee_infos');
    }
}
