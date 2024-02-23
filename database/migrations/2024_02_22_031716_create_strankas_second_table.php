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
        Schema::create('strankas_second', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('priimek');
            $table->string('naslov');
            $table->integer('postna_stevilka_naziv_poste');
            $table->integer('davcna_stevilka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strankas_second');
    }
};
