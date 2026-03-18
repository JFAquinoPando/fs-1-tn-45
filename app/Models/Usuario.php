<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    //
    use HasFactory;
    protected $fillable = ["nombre", "correo", "clave"];
    protected $hidden = ["clave"];

    public function obtenerTareas():HasMany {
        return $this->hasMany(Tarea::class);
    }
}
