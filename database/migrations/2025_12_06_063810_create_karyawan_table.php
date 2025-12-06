<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('posisi')->nullable();
            $table->integer('gaji')->nullable();
            $table->timestamps();
            // $table->softDeletes(); // aktifkan kalau mau soft delete
        });
    }

    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}
