<?php

namespace App\Http\Controllers;

use App\Http\Requests\TareaRequest;
use App\Models\Tarea;
use App\Rules\ContrasenhaValida;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TareaRequest $peticion)
    {
        //
        //$peticion->input("titulo")

         $e = $peticion->validate([
             "title" => ["required", new ContrasenhaValida()]
         ]);
         dd($e);
        /* $res = $peticion->validate([
            "title" => "required|max:255|min:3",
            //"completado" => "required|boolean"
        ]); */
        //es = 4;   
        /* dd($res); */

        return Tarea::create($peticion->all());
        /* return Tarea::create([
            "titulo" => "Scary Movie 6",
            "descripcion" => "Ir a ver la película en el cine el día del estreno",
            "completado" => false,
            "extra" => "la entrada debe ser en primera fila"
        ]); */
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
