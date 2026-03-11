@extends("layouts.app")

@section("contenido")

    @if (session("exitoso"))
        <div class="bg-yellow-400 text-gray-800 rounded-md">
            <strong>Mensaje:</strong> {{ session("exitoso") }}
        </div>
    @endif

    @if (session("borrado"))
        <div class="bg-red-400 text-gray-800 rounded-md">
            <strong>Mensaje:</strong> {{ session("borrado") }}
        </div>
    @endif

    <h1 class="text-3xl font-bold mb-4">Listado de alumnos</h1>
    <form action="/eliminar" method="post">
        @method("delete")
        @csrf
        <ul class="list-disc list-inside mb-4">
            @foreach ($estudiantes as $alumno)
                <li class="flex justify-between">{{ $alumno->nombre }} {{ $alumno->apellido }}
                    <input type="checkbox" name="eliminar[]" value="{{ $alumno->id }}">
                </li>
            @endforeach
        </ul>
        <button class="bg-red-600 rounded-md">Eliminar seleccionados</button>
    </form>

@endsection