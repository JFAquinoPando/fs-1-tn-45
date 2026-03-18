<?php

namespace App\Http\Controllers;

use App\Http\Requests\TareaRequest;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $Tarea = new Tarea();
        $Tarea->titulo = $peticion->titulo;
        $Tarea->descripcion = strlen($peticion->descripcion) < 4 
                                ? "Sin descripcion" : $peticion->descripcion;
        $Tarea->completado = $peticion->completado;
        $Tarea->extra = "ORM con NEW";
        $Tarea->save();
        return response()->json($Tarea, 201);

        /* $datos = $peticion->validated();
        $tarea = Tarea::create($datos);

        return response()->json($tarea, 201); */
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
    public function edit(Tarea $tarea, $id)
    {
        //
        $tareaEncontrada = Tarea::find($id);

        if($tareaEncontrada === null){
            Log::warning("No se encontró la tarea con id: {$id}");
            Log::debug("Una prueba de log debug para la tarea con id: {$id}");
            return response("<h1>Tarea no encontrada</h1>", 404)
                    ->header("Content-Type", "text/html");
        }

        return view("todo_list_actualizar", 
        [
                "tarea_guardada" => $id, 
                "tareaEncontrada" => $tareaEncontrada
              ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TareaRequest $peticion, $id)
    {
        //
        Log::info("\n\nActualizando la tarea con id: {$id} ". json_encode($peticion->all()));
        $tarea = Tarea::find($id);
        $tarea->titulo = $peticion->titulo. " - Actualizado";
        $tarea->descripcion = "Actualizacion con ORM";
        $tarea->completado = $peticion->completado;
        $tarea->extra = "ORM con UPDATE";
        $tarea->save();
        return response()->json($tarea, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $borrar = Tarea::find($id);
        $borrar->delete();
    }

    /**
     * Remove the specified resource on storage from Bulk Data.
     */
    public function deleteMany(Request $peticion)
    {
        $tareas = $peticion->input("tareas");
        foreach ($tareas as $tarea) {
            $this->destroy($tarea);
        }
        return redirect('/formulario');
        /* $borrar = Tarea::find($id);
        $borrar->delete(); */
    }
}