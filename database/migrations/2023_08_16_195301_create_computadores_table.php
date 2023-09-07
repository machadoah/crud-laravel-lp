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
        Schema::create('computadores', function (Blueprint $table) {
            $table->increments('computadorId');
            $table->string('marca')->nullable();
            $table->decimal('preco', 14, 2)->nullable();
            $table->integer('ram')->nullable();
            $table->integer('disco')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computadores');
    }
};
