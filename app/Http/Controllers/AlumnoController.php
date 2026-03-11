<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //
    public function index(){
        $asd = Alumno::all();
        return view("alumnos", ["estudiantes" => $asd]);
    }

    public function formularioEditar(){
        return view("formulario-alumnos");
    }

    public function store(Request $peticion){
        //dd($peticion->all());
        $nombre = $peticion->input("nombre");
        $apellido = $peticion->input("apellido");
        $fecha = $peticion->input("fecha_nacimiento");
        $medallas = $peticion->input("medallas");
        
        $alumno = Alumno::create(
            [
                "nombre" => $nombre,
                "apellido" => $apellido,
                "fecha_nacimiento" => $fecha,
                "medalllas" => $medallas
            ]
        );


        return redirect("/alumnos")->with('exitoso', "Alumno {$nombre} guardado correctamente");
    }

    public function eliminar(Request $peticion){
        $ids = $peticion->input("eliminar", []);
        if (!empty($ids)) {
            Alumno::whereIn('id', $ids)->delete();
        }
        return redirect("/alumnos")->with('borrado', "Alumno/s borrado correctamente");
    }

}
