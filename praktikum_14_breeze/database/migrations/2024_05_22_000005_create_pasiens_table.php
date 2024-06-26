<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            // id, kode, nama, tempat lahir, tanggal, gender, email, alamat, kelurahan_id
            $table->id();
            $table->string('kode', 10)->unique();
            $table->string('nama', 50);
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('gender', 10);
            $table->string('email', 50);
            $table->text('alamat');
            $table->unsignedBigInteger('kelurahan_id');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
