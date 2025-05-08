<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/js/app.js') 

</head>
<body>

    <div class="container">
        <h1>
            @yield('title')
        </h1>
    </div>
    

    <div class="container">
            @yield('content')
    </div>
</body>
</html>