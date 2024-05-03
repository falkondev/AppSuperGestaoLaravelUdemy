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
        Schema::table('produtos', function (Blueprint $table) {
            $fornecedor_id = DB::table('fornecedores')->insertGetId([
                'id' => 0,
                'nome' => 'Fornecedor Padrão SG',
                'site' => 'fornecedorpadraosg.com.br',
                'uf' => 'PR',
                'email' => 'contato@fornecedorpadraosg.com.br',
            ]);

            $table->unsignedBigInteger('fornecedor_id')->after('id')->default($fornecedor_id);
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('produtos_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');

            DB::table('fornecedores')->delete(0);
        });
    }
};
