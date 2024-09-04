

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //adiconou a coluna
       Schema::table('site_contatos', function (Blueprint $table) {
        if (!Schema::hasColumn('site_contatos', 'motivo_contatos_id')) {
            $table->unsignedBigInteger('motivo_contatos_id');
        }
    });
        //permite executar uma query na bd
        DB::statement('update site_contatos set motivo_contato_id = motivo_contato');
    
        //criar a fk
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato');
                            //<table>_<column>_<foreign>
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
            
        });

        DB::statement('update site_contatos set motivo_contato = motivo_contato_id');
    
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });
    }
};

