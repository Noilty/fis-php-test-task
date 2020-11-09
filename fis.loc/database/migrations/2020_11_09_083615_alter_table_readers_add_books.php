<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableReadersAddBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('readers', function (Blueprint $table) {
            /*$table->unsignedBigInteger('book_id')
                ->comment('Идентификатор книги');*/

            $table->foreign('book_id')
                ->references('bid')
                ->on('books');
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
            $table->dropForeign(['book_id']);
            //$table->dropColumn(['book_id']);
        });
    }
}
