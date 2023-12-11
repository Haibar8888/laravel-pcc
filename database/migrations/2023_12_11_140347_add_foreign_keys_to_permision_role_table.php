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
        Schema::table('permision_role', function (Blueprint $table) {
            //
            $table->foreignId('id_permision', 'fk_permision_role_to_permision')->references('id')->on('permision')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreignId('id_role', 'fk_permision_role_to_role')->references('id')->on('role')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permision_role', function (Blueprint $table) {
            //
            $table->dropForeign('fk_permision_role_to_permision');
            $table->dropForeign('fk_permision_role_to_role');
        });
    }
};
