<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TambahKerjasama;

class CreateMoASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mo_a_s', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TambahKerjasama::class);
            $table->string('namaperjanjian');
            $table->string('path');
            $table->string('jenis');
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
        Schema::dropIfExists('mo_a_s');
    }
}
