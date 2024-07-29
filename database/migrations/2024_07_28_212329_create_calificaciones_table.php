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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->double('ser10');
            $table->double('saber35');
            $table->double('hacer35');
            $table->double('decidir10');
            $table->double('auto_ser5');
            $table->double('auto_decidir5');
            $table->double('promedio');
            $table->string('situacion',15);
            //para el estudiante
            $table->unsignedBigInteger('estudiante_id')->nullable();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');

            //para el asignacione
            $table->unsignedBigInteger('asignacione_id')->nullable();
            $table->foreign('asignacione_id')->references('id')->on('asignaciones')->onDelete('cascade'); 

            //para el trimestre            
            $table->unsignedBigInteger('trimestre_id')->nullable();
            $table->foreign('trimestre_id')->references('id')->on('trimestres')->onDelete('cascade');
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
        Schema::dropIfExists('calificaciones');
    }
};
