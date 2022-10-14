<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mous', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tambah_kerjasama_id');
            $table->string('Judul');
            $table->date("tglmulai");
            $table->date("tglselesai")->nullable();
            $table->string('path');
            $table->timestamps();

            $table->foreign('tambah_kerjasama_id')->references('id')->on('tambahkerjasama')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mo_u_s');
    }
}
