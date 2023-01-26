<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('imie');
            $table->string('nazwisko');
            $table->string('telefon');
            $table->string('ulica');
            $table->string('miasto');
            $table->string('kraj');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post');
    }
};
