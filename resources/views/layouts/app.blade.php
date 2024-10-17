<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EatsEnjoy</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header>
            <h1><a href="index.html" class="restaurant-name">Eats Enjoy</a></h1>
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            <p>&copy; Eats Enjoy. Una experiencia incriblemente única.</p>
        </footer>
    </body>
</html>
