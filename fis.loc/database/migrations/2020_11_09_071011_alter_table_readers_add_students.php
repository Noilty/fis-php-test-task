<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableReadersAddStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('readers', function (Blueprint $table) {
            /*$table->unsignedBigInteger('student_id')
                ->comment('Идентификатор студента');*/

            $table->foreign('student_id')
                ->references('sid')
                ->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('readers', function (Blueprint $table) {
            $table->dropForeign(['student_id']);
            $table->dropColumn(['student_id']);
        });
    }
}
