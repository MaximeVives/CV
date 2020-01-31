<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Neumorphism-Design</title>

        <link rel="stylesheet" href="css/main_style.css">
        <link rel="stylesheet" href="css/navbar_style.css">

        <script src="https://kit.fontawesome.com/fb3e250c04.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
        @extends ('layouts\navbar')
        @yield ('content')
        {{-- @extends ('footer') --}}

    </body>
</html>

