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
</body>
</html>