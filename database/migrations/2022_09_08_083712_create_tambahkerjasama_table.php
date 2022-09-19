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
            $table->string("namamitra");
            $table->string("jenismitra");
            $table->string("judulkerjasama");
            $table->string("lingkupkerja");
            $table->string("alamat");
            $table->string("negara");
            $table->integer("notelp");
            $table->string("web");
            $table->string("bulankerjasama");
            $table->integer("nilaikontrak");
            $table->date("tglmulai");
            $table->date("tglselesai");
            $table->string("judul_mou");
            $table->string("path_mou");
            $table->string("judul_moa");
            $table->string("path_moa");
            $table->string("narahubung");
            $table->integer("notelpic");
            $table->string("emailpic");
            $table->string('status');
            $table->string("pic");
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
