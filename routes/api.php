<?php

use App\Http\Controllers\TareaController;
use App\Models\Funko;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/tareas", function(){
    return Tarea::all();
});

Route::post("/tareas", [TareaController::class, "store"]);













Route::get("/datos", function(){
    return [
        [
            "nombre" => "José",
            "apellido" => "Ayala"
        ],
        [
            "nombre" => "Dalila",
            "apellido" => "Zárate"
        ]
    ];
});

Route::post("/crear-funko", function(Request $peticion){
    $nombre = $peticion->input("nombre");

    $nuevoFunko = Funko::create([
        "nombre" => $nombre,
        "imagen" => $peticion->input("imagen"),
        "precio" => $peticion->input("precio")
    ]);

    return $nuevoFunko;
});

Route::get("/funkos", function(){
    return Funko::all();
});

Route::delete("/funkos/{posicion}", function(Request $peticion, $posicion){
    return Funko::find($posicion) ? Funko::find($posicion)->delete() : "Ya no existe";
});