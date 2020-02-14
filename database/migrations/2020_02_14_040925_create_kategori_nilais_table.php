<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_nilais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uh1');
            $table->string('uh2');
            $table->string('uh3');
            $table->string('uh4');
            $table->string('uh5');
            $table->string('uh6');
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
        Schema::dropIfExists('kategori_nilais');
    }
}
