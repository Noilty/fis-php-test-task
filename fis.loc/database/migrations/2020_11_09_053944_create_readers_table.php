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
                ->unsigned()
                ->comment('Идентификатор читателя');
            $table->bigInteger('student_id')
                ->unsigned()
                ->comment('Идентификатор студента');
            $table->bigInteger('book_id')
                ->unsigned()
                ->comment('Идентификатор книги');
            $table->boolean('return_status')
                ->default(0)
                ->comment('Статус возврата книги');
            $table->timestamp('created_at')
                ->useCurrent()
                ->comment('Дата выдачи книги');
            $table->timestamp('updated_at')
                ->useCurrent()
                ->comment('Дата возврата книги');
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
