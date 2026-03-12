
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar tareas * <?php echo $tarea_guardada; ?></h1>
    <form action="/api/tareas/<?php echo $tarea_guardada; ?>" method="post">
        @method("PUT")
        <input type="text" name="titulo" placeholder="Título" 
            required minlength="3" value="{{ $tareaEncontrada->titulo }} ">
        <hr>
        <textarea name="descripcion" 
            placeholder="Descripción de la tarea" maxlength="500">{{ $tareaEncontrada->descripcion }}  </textarea>
        <hr>
        <label for="">
            <label for="">Completado: </label>
            <input type="checkbox" name="completado" 
                value="1" {{ $tareaEncontrada->completado ? 'checked' : '' }}  >
        </label> 
        <hr>
        <button>Enviar</button>
    </form>
</body>
</html>