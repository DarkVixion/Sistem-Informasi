<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tambah_kerjasama_id');
            $table->string('judul');
            $table->string('lingkupkerja');
            $table->bigInteger("nilaikontrak");
            $table->date("tglmulai");
            $table->date("tglselesai")->nullable();
            $table->string('path');            
            $table->timestamps();

            $table->foreign('tambah_kerjasama_id')->references('id')->on('tambahkerjasama')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mo_a_s');
    }
}
