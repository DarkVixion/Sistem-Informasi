<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->id();
            $table->string("namaakun");
            $table->string("userssoakun");
            $table->string("emailakun");
            $table->string("nipakun");
            $table->string("notelpakun");
            $table->string("roleakun");
            $table->string("statusakun");
            $table->string("path_profileakun");
            $table->string('updated_at')->nullable();
            $table->string('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun');
    }
}
