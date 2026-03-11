<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>

<body class="grid grid-column gap-4 bg-blue-900 text-gray-100 items-center justify-items-center min-h-screen">
    <header class="bg-gray-900 fixed top-0 left-0 w-full p-2">
        <nav class="flex gap-2 w-96 mx-auto">
            <a href="/alumnos" class="hover:text-yellow-400">Listado</a>
            <a href="/agregar-alumnos" class="hover:text-yellow-400">Agregar nuevo</a>
        </nav>
    </header>
    <main class="mt-12">
        @yield("contenido", "Esto es un valor por defecto")
    </main>
    <footer></footer>
</body>

</html>