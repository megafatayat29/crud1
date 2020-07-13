<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jawaban')){
            Schema::create('jawaban', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->longText('isi');
                $table->date('tanggal_dibuat')->nullable();
                $table->date('tanggal_diperbaharui')->nullable();
                $table->timestamps(0);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
