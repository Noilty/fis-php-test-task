<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('sid')
                ->comment('Идентификатор студента');
            $table->string('surname')
                ->nullable(false)
                ->comment('Фамилия');
            $table->string('name')
                ->nullable(false)
                ->comment('Имя');
            $table->string('middle_name')
                ->nullable(false)
                ->comment('Отчество');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
