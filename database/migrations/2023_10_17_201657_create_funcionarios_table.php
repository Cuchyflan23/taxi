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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('cedula');
            $table->string('nombres');
            $table->date('fechaIngreso');
            $table->string('departamento');
            $table->string('area');
            $table->string('correo');
            $table->string('cedulaJefe');
            $table->string('estado');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('accesos');
            $table->string('cedulaJefeDepartamento');
            $table->date('fechaNombramiento');
            $table->string('cargo');
            $table->string('grupo');
            $table->float('sueldo');
            $table->string('codigoPuesto');
            $table->string('genero');
            $table->string('relacionLaboral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
