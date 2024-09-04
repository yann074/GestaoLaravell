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

        Schema::create('unidadess', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();


        });
        /*
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*
        Schema::table('produto_detalhes', function(Blueprint $table){
            //apagar as foreign key
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        
        });
        
        Schema::table('produtos', function(Blueprint $table){
            //apagar as foreign key
            $table->dropForeign('produtos_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        
        });
*/

        Schema::dropIfExists('unidadess');
    }
};
