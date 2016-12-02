<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSSSSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sss_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->double('salary_from');
            $table->double('salary_to');
            $table->double('base_salary');
            $table->double('ec');
            $table->double('er');
            $table->double('ee');
            $table->double('total');
            $table->string('status');
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
        Schema::dropIfExists('sss_settings');
    }
}
