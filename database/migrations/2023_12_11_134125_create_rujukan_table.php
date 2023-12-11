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
        Schema::create('rujukan', function (Blueprint $table) {
            $table->id();
            $table->integer('news');
            $table->string('prioritas');
            $table->string('alasan_dirujuk');
            $table->string('satgas');
            $table->string('diagnosa');
            $table->enum('status',[1,2,3])->default(1)->comment('1 = belum diterima,2=diterima');
            $table->string('keterangan');
            $table->date('timing_masuk');
            $table->date('timing_respon');
            $table->date('timing_status');
            $table->date('timing_kelengkapan_berkas')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rujukan');
    }
};
