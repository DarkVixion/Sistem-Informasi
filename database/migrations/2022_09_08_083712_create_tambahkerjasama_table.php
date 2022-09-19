<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambahkerjasamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambahkerjasama', function (Blueprint $table) {
            $table->id();
            $table->string("nama_mitra");
            $table->string("jenis_mitra");
            $table->string("judul_kerjasama");
            $table->string("lingkup_kerja");
            $table->string("alamat");
            $table->string("negara");
            $table->integer("no_telp");
            $table->string("web");
            $table->string("bulan_kerjasama");
            $table->integer("nilai_kontrak");
            $table->date("tgl_mulai");
            $table->date("tgl_selesai");
            $table->string("judul_mou");
            $table->string("path_mou");
            $table->string("judul_moa");
            $table->string("path_moa");
            $table->string("narahubung");
            $table->integer("no_tel_nara");
            $table->string("email_nara");
            $table->string("pic_uper");
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambahkerjasama');
    }
}
