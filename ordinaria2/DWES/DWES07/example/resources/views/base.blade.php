<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title> <!-- Título dinámico -->
</head>
<body>

    <header>
        <h1>Mi Aplicación</h1>
        <nav>
            <ul>
                <li><a href="/productos">Productos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Aquí se insertará el contenido específico de cada vista -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación</p>
    </footer>

</body>
</html>
