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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_passeggero');
            $table->string('nome_passeggero');
            $table->string('cognome_passeggero');
            $table->tinyInteger('id_treno');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->float('prezzo', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
