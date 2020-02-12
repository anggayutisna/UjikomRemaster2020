<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_guru');
            $table->string('foto');
            $table->unsignedBigInteger('mapel_id');
            $table->foreign('mapel_id')->references('id')->on('mapels')->onDelete('CASCADE');
            $table->string('tempat_tinggal');
            $table->date('tanggal_lahir');
            $table->integer('no_telpon');
            $table->unsignedBigInteger('email_id');
            $table->foreign('email_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->unsignedBigInteger('password_id');
            $table->foreign('password_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('gurus');
    }
}
