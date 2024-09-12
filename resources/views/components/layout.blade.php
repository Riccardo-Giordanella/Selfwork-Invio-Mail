<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(Route::currentRouteName() == 'homepage')
    <title>Homepage</title>
    @elseif(Route::currentRouteName() == 'servizi')
    <title>Services</title>
    @elseif(Route::currentRouteName() == 'chi.siamo')
    <title>About us</title>
    @elseif(Route::currentRouteName() == 'articoli')
    <title>Articles</title>
    @elseif(Route::currentRouteName() == 'dettaglio')
    <title>Details</title>
    @endif

    @vite('resources/css/app.css')
</head>
<body>

    {{$slot}}

    @vite('resources/js/app.js')
</body>
</html>