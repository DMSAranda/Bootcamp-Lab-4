<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Películas</title>
    <!-- Agrega enlaces a tus archivos CSS aquí si es necesario -->
     
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('films.index') }}">Películas</a></li>
                <!-- Agrega más enlaces de navegación aquí si es necesario -->
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content') <!-- Esta sección se llenará con el contenido de cada vista -->
        </div>
    </main>

    <footer>
        <!-- Agrega información del pie de página aquí si es necesario -->
    </footer>
    <!-- Agrega enlaces a tus archivos JavaScript aquí si es necesario -->
</body>
</html>