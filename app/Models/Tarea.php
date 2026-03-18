<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tarea extends Model
{
    //
    use HasFactory;
    protected $fillable = ["titulo", "descripcion","usuario_id", "completado", "extra"];
    // protected $hidden = ["extra"];

    public function obtenerUsuario(): BelongsTo {
        return $this->belongsTo(Usuario::class);
    }

}
