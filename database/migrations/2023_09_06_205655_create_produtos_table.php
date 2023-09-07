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
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('produtoId');
            $table->text('codigo')->nullable();
            $table->text('descricao')->nullable();
            $table->decimal('custoProducao', 10, 2)->nullable();
            $table->string('unidade')->nullable();
            $table->decimal('quantidadeEstoque', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
