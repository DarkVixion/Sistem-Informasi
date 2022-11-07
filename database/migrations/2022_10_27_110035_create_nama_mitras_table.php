<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamaMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nama_mitras', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string("jenismitra")->nullable();
            $table->string("alamat")->nullable();
            $table->string("negara")->nullable();
            $table->bigInteger("notelpmitra")->nullable();
            $table->string("website")->nullable();
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
        Schema::dropIfExists('nama_mitras');
    }
}
