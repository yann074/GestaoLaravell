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
    if (!Schema::hasTable('produto_detalhes')) { //verificar se existe
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->float('comprimento', 8, 2);
            $table->float('largura', 8, 2);
            $table->float('altura', 8, 2);
            $table->timestamps();

            // Chave estrangeira
            $table->foreign('produto_id')->references('id')->on('produtos'); // Adicione o nome da tabela correta aqui
            $table->unique('produto_id');
        });
    }
}

public function down(): void
{
    Schema::dropIfExists('produto_detalhes');
}

};
