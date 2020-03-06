<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function(Blueprint $table){
            $table->increments('id');
            $table->string('przedmiot');
            $table->string('poziom');
            $table->string('lokalizacja');
            $table->string('tel');
            $table->string('Imie');
            $table->text('title');
            $table->text('content');
            $table->integer('id_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
