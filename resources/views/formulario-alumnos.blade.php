@extends("layouts.app")

@section("contenido")
    <form action="/guardar" method="post" class="grid grid-cols-1 gap-2">
        <div class="grid grid-cols-1 gap-2">
            @csrf
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" placeholder="Ej: Juan" class="placeholder:text-black text-black">
            <hr>
            <label for="apellido">apellido</label>
            <input type="text" name="apellido" placeholder="Ej: Pérez" class="placeholder:text-black text-black">
            <hr>
            <label for="fecha_nacimiento">fecha_nacimiento</label>
            <input type="date" name="fecha_nacimiento" value="2000-01-01" class="placeholder:text-black text-black">
            <hr>
            <label for="medallas">medallas</label>
            <input type="number" name="medallas" min="0" max="15" value="0" class="placeholder:text-black text-black">
        </div>
        <button class="bg-green-700 text-gray-200 px-4 py-2 rounded-md">Agregar</button>
    </form>
@endsection