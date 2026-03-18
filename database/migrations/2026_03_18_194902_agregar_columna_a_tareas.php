<?php

use App\Models\Usuario;
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
        Schema::table('tareas', function (Blueprint $table) {
            $table->integer("usuario_id")->foreignIdFor(Usuario::class)->default(1)->after("completado");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropColumn("usuario_id");
        });
    }
};
