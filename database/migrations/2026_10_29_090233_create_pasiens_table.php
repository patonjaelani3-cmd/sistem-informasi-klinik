<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm')->unique();
            $table->string('nama_pasien');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_lahir');
            $table->text('alamat')->nullable();
            $table->string('no_telepon', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};