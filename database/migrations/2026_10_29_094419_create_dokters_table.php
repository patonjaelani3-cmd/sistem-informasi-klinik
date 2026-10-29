<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('dokters', function (Blueprint $table) {
            if (!Schema::hasColumn('dokters', 'spesialis')) {
                $table->string('spesialis')->nullable();
            }

            if (!Schema::hasColumn('dokters', 'jadwal_praktik')) {
                $table->string('jadwal_praktik')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('dokters', function (Blueprint $table) {
            if (Schema::hasColumn('dokters', 'jadwal_praktik')) {
                $table->dropColumn('jadwal_praktik');
            }

            if (Schema::hasColumn('dokters', 'spesialis')) {
                $table->dropColumn('spesialis');
            }
        });
    }
};