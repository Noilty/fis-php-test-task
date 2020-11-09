<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishingHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishing_houses', function (Blueprint $table) {
            $table->bigIncrements('phid')
                ->comment('Идентификатор издательства');
            $table->string('name')
                ->nullable(false)
                ->comment('Наименование издательства');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publishing_houses');
    }
}
