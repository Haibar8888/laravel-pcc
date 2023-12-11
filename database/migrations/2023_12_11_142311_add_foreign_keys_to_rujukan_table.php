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
        Schema::table('rujukan', function (Blueprint $table) {
            //
            $table->foreignId('id_pasien', 'fk_rujukan_to_pasien')->references('id')->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreignId('id_dokter_konsul', 'fk_rujukan_to_dokter')->references('id')->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreignId('id_dokter_dpjp', 'fk_rujukan_to_dokter')->references('id')->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreignId('id_operator', 'fk_rujukan_to_operator')->references('id')->on('operator')->onUpdate('CASCADE')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rujukan', function (Blueprint $table) {
            //
            $table->dropForeign('fk_rujukan_to_pasien');
            $table->dropForeign('fk_rujukan_to_dokter');
            $table->dropForeign('fk_rujukan_to_dokter');
            $table->dropForeign('fk_rujukan_to_operator');
        });
    }
};
