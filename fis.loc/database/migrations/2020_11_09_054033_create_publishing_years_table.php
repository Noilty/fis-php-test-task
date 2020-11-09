<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishingYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishing_years', function (Blueprint $table) {
            $table->bigIncrements('pyid')
                ->unsigned()
                ->comment('Идентификатор года');
            $table->string('year')
                ->nullable(false)
                ->comment('Числовое представление');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publishing_years');
    }
}
