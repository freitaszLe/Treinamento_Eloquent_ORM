<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Tabela de relacionamento entre funcionários e projetos
     * Esta tabela cria uma relação muitos-para-muitos entre funcionários e projetos.
     * Cada funcionário pode estar associado a vários projetos e cada projeto pode ter vários funcionários.
     * CHAMADA DE PIVO
     */
    public function up(): void
    {
        Schema::create('employee_project', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_project');
    }
};
