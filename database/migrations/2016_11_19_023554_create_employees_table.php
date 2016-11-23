<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('present_address');
            $table->string('permanent_address');            
            $table->string('email');
            $table->string('work_phone');
            $table->string('gender');
            $table->dateTime('birthday');
            $table->string('citizenship');
            $table->string('civil_status');
            $table->integer('no_dependents');
            $table->string('TIN');
            $table->string('SSS');
            $table->string('pag-ibig');
            $table->string('philhealth');
            $table->string('position');
            $table->dateTime('start_date');
            $table->double('starting_salary');
            $table->integer('supervisor')->nullable();
            $table->string('ECN1');
            $table->string('ECR1');
            $table->string('ECC1');
            $table->string('ECN2');
            $table->string('ECR2');
            $table->string('ECC2');
            $table->string('ECN3');
            $table->string('ECR3');
            $table->string('ECC3');                                    
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
