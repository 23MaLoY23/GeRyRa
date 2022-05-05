<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrepodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Фамилия');
            $table->string('Имя');
            $table->string('Отчество');
            $table->date('Дата_рождения');
            $table->string('Номер');            
            $table->string('Адрес');
            $table->string('Предмет');
            $table->double('Стаж');
            $table->string('Образование');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prepods');
    }
}
