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
            $table->string("namaakunuser");
            $table->string("ssoakunuser");
            $table->string("passwordakunuser");
            $table->string("emailakunuser");
            $table->string("nipakunuser");
            $table->string("notelpakunuser");
            $table->string("roleakunuser");
            $table->string("statusakunuser");
            $table->string("path_profileakunuser");
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
