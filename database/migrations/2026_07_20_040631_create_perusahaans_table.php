<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('bidang_usaha');
            $table->text('alamat');
            $table->string('no_telepon')->nullable();
            $table->integer('jumlah_siswa')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perusahaans');
    }
};
