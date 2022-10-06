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
            $table->string("status");
            $table->string("namamitra");
            $table->string("jenismitra");
            $table->string("lingkupkerja")->nullable();
            $table->string("alamat")->nullable();
            $table->string("negara")->nullable();
            $table->bigInteger("notelpmitra")->nullable();
            $table->string("website")->nullable();
            $table->string("bulaninput")->nullable();
            $table->bigInteger("nilaikontrak")->nullable();
            $table->string("judul_mou");
            $table->date("tglmulai_mou")->nullable();
            $table->date("tglselesai_mou")->nullable();
            $table->string("path_mou");
            $table->string("judul_moa");
            $table->date("tglmulai_moa")->nullable();
            $table->date("tglselesai_moa")->nullable();
            $table->string("path_moa");
            $table->string("narahubung")->nullable();
            $table->bigInteger("notelpnara")->nullable();
            $table->string("emailnara")->nullable();
            $table->bigInteger('notelppic')->nullable();
            $table->string('emailpic')->nullable();
            $table->string("assignuserakun")->nullable();
            $table->datetime("updated_at")->nullable();
            $table->datetime("created_at")->nullable();
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
