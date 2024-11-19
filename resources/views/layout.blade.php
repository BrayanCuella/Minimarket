<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Header de la aplicacion</h1>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p> pie de pagiuna de la aplicacion </p>
    </footer>
</body>
</html>
