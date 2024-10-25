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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 255);
            $table->string('stazione_di_partenza', 255);
            $table->string('stazione_di_arrivo', 255);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->char('codice_treno', 12)->unique();
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
