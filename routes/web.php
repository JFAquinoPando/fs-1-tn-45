<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/alumnos", [AlumnoController::class, "index"]
);

Route::get("/agregar-alumnos", [AlumnoController::class, "formularioEditar"]);

Route::post("/guardar", [AlumnoController::class, "store"]);

Route::delete("/eliminar", [AlumnoController::class, "eliminar"]);


Route::get("formulario", function(){
    return view("todo_list");
});



















Route::get("/datos", function(){
    return [
        [
            "nombre" => "Juan",
            "apellido" => "Ayala"
        ],
        [
            "nombre" => "Dalila",
            "apellido" => "Zárate"
        ]
    ];
});


