<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pertanyaan')){
            Schema::create('pertanyaan', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('judul');
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
        Schema::dropIfExists('pertanyaan');
    }
}
