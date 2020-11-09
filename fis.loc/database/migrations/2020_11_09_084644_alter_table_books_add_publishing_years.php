<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableBooksAddPublishingYears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            /*$table->unsignedBigInteger('student_id')
                ->comment('Идентификатор студента');*/

            $table->foreign('py_id')
                ->references('pyid')
                ->on('publishing_years');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['py_id']);
            $table->dropColumn(['py_id']);
        });
    }
}
