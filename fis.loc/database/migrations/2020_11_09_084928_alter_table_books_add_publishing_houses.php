<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableBooksAddPublishingHouses extends Migration
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

            $table->foreign('ph_id')
                ->references('phid')
                ->on('publishing_houses');
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
            $table->dropForeign(['ph_id']);
            $table->dropColumn(['ph_id']);
        });
    }
}
