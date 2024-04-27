<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descrição');
            $table->string('categoria');
            $table->string('imagem')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personagens');
    }
};
