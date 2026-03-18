<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listdo de tareas</h1>
    <form action="/api/tareas" method="post">
        <input type="text" name="titulo" placeholder="Título" required minlength="3">
        <hr>
        <textarea name="descripcion" placeholder="Descripción de la tarea" maxlength="500"></textarea>
        <hr>
        <label for="">
            <label for="">Completado: </label>
            <input type="checkbox" name="completado" value="1">
        </label> 
        <hr>
        <button>Enviar</button>
    </form>

    <hr>

    <form action="/api/tareas" method="post">
        @method("DELETE")
        <ul>
            @foreach ($tareas_a_realizar as $tarea)
            <li> 
                <label for="tarea_{{ $tarea->id }}">{{ $tarea->titulo }}</label> 
                <input type="checkbox" name="tareas[]" value="{{ $tarea->id }}" id="tarea_{{ $tarea->id }}"> 
                | 
                <a href="/actualizar/{{ $tarea->id }}" target="_blank" rel="noopener noreferrer">Editar</a></li>
            @endforeach
        </ul>
        <button>Eliminar</button>
    </form>

</body>
</html>