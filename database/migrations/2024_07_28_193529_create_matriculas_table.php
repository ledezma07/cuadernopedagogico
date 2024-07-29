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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('estado',10);//activo-inactivo
            //para el estudiante
            $table->unsignedBigInteger('estudiante_id')->nullable();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            //para el curso
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            //para el periodo
            $table->unsignedBigInteger('periodo_id')->nullable();
            $table->foreign('periodo_id')->references('id')->on('periodos')->onDelete('cascade');            
           //para el usuario
           $table->unsignedBigInteger('usuario_id')->nullable();
           $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
