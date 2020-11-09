<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readers', function (Blueprint $table) {
            $table->bigIncrements('rid')
                ->comment('Идентификатор читателя');
            $table->bigInteger('student_id')
                ->comment('Идентификатор студента');
            $table->bigInteger('book_id')
                ->comment('Идентификатор книги');
            $table->timestamp('created_at')
                ->useCurrent()
                ->comment('Дата выдачи книги');
            $table->timestamp('updated_at')
                ->useCurrent()
                ->comment('Дата возврата книги');
            //$table->timestamps();

            $table->foreign('student_id')
                ->references('sid')
                ->on('students');

            $table->primary(['student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readers');
    }
}
