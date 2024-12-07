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
        Schema::create('ttdtosurats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("anggota_id");
            $table->foreignId("surat_id");
            $table->text("Sebagai")->nullable();
            $table->text("Tempat")->nullable();
            $table->date("Tanggal")->nullable();
            $table->string("Sign")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttdtosurats');
    }
};
