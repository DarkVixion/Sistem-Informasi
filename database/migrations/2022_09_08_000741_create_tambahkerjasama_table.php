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
            $table->string("skalakerjasama");
            $table->string("alamat");
            $table->string("negara");
            $table->integer("notelp");
            $table->double("web");
            $table->string("bulankerjasama");

            $table->integer("nilaikontrak");
            $table->datetime("tglmulai");
            $table->datetime("tglselesai");
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
