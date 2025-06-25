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
        Schema::create('addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Adicione esta linha!
            $table->id();
            $table->string('logradouro', 100);
            $table->string('numero', 100);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('complemento', 100);
            $table->string('estado', 2);
            $table->string('cep', 10);

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
