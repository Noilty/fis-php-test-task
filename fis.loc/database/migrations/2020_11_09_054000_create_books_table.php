<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('bid')
                ->comment('Идентификатор книги');
            $table->string('name')
                ->nullable(false)
                ->comment('Название книги');
            $table->bigInteger('author_id')
                ->unsigned()
                ->nullable(false)
                ->comment('Идентификатор автора');
            $table->bigInteger('count')
                ->unsigned()
                ->nullable(false)
                ->comment('Кол-во книг');
            $table->bigInteger('py_id')
                ->unsigned()
                ->nullable(false)
                ->comment('Идентификатор издания книги');
            $table->bigInteger('ph_id')
                ->unsigned()
                ->nullable(false)
                ->comment('Идентификатор издательста книги');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
