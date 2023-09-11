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
        Schema::create('metier_ouvrier', function (Blueprint $table) {
            $table->id();
            $table->foreignId('metier_id')->constrained()->onDelete('cascade');
            $table->foreignId('ouvrier_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metier_ouvrier');
    }
};
