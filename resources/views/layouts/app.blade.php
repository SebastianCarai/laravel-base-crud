<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <header class="p-3">
        <a href="{{ route('comics.index') }}">
            Torna alla lista dei comics
        </a>
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer>
        <h1>Footer</h1>
    </footer>
</body>
</html>