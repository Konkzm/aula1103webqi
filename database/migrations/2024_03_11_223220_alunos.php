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
        Schema::create('alunos', function(Blueprint $tabela){
        $tabela->id();
        $tabela->string('nome', 55);
        $tabela->char('cpf' ,14) ->unique();
        $tabela->string('telefone' ,15) ->unique();
        $tabela->string('email', 100) ->unique();
        $tabela->timestamps();
    }
    );
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
