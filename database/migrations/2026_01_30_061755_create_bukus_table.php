<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->char('kode', 12)->unique();
            $table->string('judul', 255);
            $table->string('penulis', 255);
            $table->string('penerbit', 255);
            $table->string('tahun_terbit', 255);
            $table->char('stok', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
