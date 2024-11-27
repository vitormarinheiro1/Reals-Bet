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
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affiliate_id') // Chave estrangeira para afiliado
                  ->constrained('affiliates') // Relacionamento com a tabela affiliates
                  ->onDelete('cascade'); // Se o afiliado for deletado, a comissão será excluída automaticamente
            $table->decimal('value', 10, 2); // Valor da comissão, podendo ser positivo ou negativo
            $table->date('date'); // Data da comissão
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commissions');
    }
};
