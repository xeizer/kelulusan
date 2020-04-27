<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUasIjazahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uas_ijazahs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mapel_id')->unsigned();
            $table->bigInteger('siswa_id')->unsigned();
            $table->integer('uas')->unsigned()->nullable();
            $table->integer('ijazah')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('mapel_id')->references('id')->on('mapels')->onDelete('cascade');
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uas_ijazahs');
    }
}
