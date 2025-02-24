<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title> 
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/productos">Productos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content') 
    </main>
</body>
</html>
