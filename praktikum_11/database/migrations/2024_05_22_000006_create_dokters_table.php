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
        Schema::create('dokters', function (Blueprint $table) {
            // nama, gender, tempat lahir, tanggal lahir, kategori, telpon, alamat, unit kerja_id
            $table->bigIncrements('id'); 
            $table->string('nama', 50);
            $table->char('gender', 1);
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('kategori', 50);
            $table->string('telpon', 50);
            $table->text('alamat');   
            $table->unsignedBigInteger('unit_kerja_id');
            $table->foreign('unit_kerja_id')->references('id')->on('unitkerjas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
