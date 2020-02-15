<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nilai');
            $table->unsignedBigInteger('mapel_id');
            $table->foreign('mapel_id')->references('id')->on('mapels')->onDelete('CASCADE');
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('CASCADE');
            $table->unsignedBigInteger('kategorinilai_id');
            $table->foreign('kategorinilai_id')->references('id')->on('kategori_nilais')->onDelete('CASCADE');
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
        Schema::dropIfExists('nilais');
    }
}
