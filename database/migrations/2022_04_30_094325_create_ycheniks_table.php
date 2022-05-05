<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYcheniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ycheniks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Фамилия');
            $table->string('Имя');
            $table->string('Отчество');
            $table->date('Дата_рождения');
            $table->string('Номер');            
            $table->string('Адрес');
            $table->time('Общее_время_обучения');
            $table->double('Количество_работ');
            $table->double('Ср_балл');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ycheniks');
    }
}
