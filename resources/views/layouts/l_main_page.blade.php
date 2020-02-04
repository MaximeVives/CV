<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageName')</title>

        <link rel="stylesheet" href="css/main_style.css">
        <link rel="stylesheet" href="css/navbar_style.css">
        @yield ('currentPage_css')

        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

        <script src="https://kit.fontawesome.com/fb3e250c04.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include ('layouts\navbar')
        <main>
            @yield ('main_content')
        </main>
        @include ('layouts\footer')
    </body>
</html>

