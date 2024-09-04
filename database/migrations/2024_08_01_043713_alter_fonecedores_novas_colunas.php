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
        //
        //Table para altera uma tabçea ja criada
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 150);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fornecedors', function (Blueprint $table) {
           // $table->dropColumn('uf');


        });
        //esse serve para remover as colunas usadadas no up
    }
};
