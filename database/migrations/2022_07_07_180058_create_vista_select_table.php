<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("create VIEW vistas as  
        SELECT tareas.nombre_tarea, tareas.descripcion, categorias.nombre_categoria FROM tareas
        LEFT JOIN categorias 
        on tareas.categoria_id = categorias.id");
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW vistas");
    }
};
