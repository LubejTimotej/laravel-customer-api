<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('strankas', function (Blueprint $table) {
            $table->id();
            $table->string('ime_priimek');
            $table->string('naslov');
            $table->integer('postna_stevilka');
            $table->integer('davcna_stevilka');
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strankas');
    }
};
