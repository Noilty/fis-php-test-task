<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('aid')
                ->comment('Идентификатор автора');
            $table->string('surname')
                ->nullable(false)
                ->comment('Фамилия');
            $table->string('name')
                ->nullable(false)
                ->comment('Имя');
            $table->string('middle_name')
                ->nullable(true)
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
        Schema::dropIfExists('authors');
    }
}
