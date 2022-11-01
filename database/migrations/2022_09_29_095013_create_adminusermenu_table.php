<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminusermenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminusermenu', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("username");
            $table->string("password");
            $table->string("email");
            $table->string("nip");
            $table->string("notelp");
            $table->string("role");
            $table->string("status");
            $table->string("path_profile")->nullable();
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
        Schema::dropIfExists('adminusermenu');
    }
}
