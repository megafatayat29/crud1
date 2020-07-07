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
                $table->string('isi',255);
                $table->timestamp('tanggal_dibuat',0);
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
