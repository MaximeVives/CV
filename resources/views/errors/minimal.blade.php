<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        {{-- <link rel="stylesheet" href="css/main_style.css"> --}}
        <link rel="stylesheet" href="css/main_style.css">
        <link rel="stylesheet" href="css/error.css">

    </head>
    <body>
        {{-- @yield('code')
        @yield('message') --}}
        <div class="error_body">
            <div id="container">
                <div class="content">
                    <h2>@yield('code')</h2>
                    <h4>Opps ! @yield('message')</h4>
                    {{-- <p>The page you were looking for doesn't exist. You may have mistyped the address or the page may have moved.</p> --}}
                    <p>@yield('description')</p>
                    <a href="/">Back to Home</a>
                </div>
            </div>
        </div>
    
        <script type="text/javascript">
            var container = document.getElementById('container');
            window.onmousemove = function (e) {
                var x = - e.clientX/12,
                    y = - e.clientY/12;
                container.style.backgroundPositionX = x + 'px';           
                container.style.backgroundPositionY = y + 'px';           
            }
        </script>
    </body>
</html>
