
<div class="navbar_grid">

    <div id="home_logo">
        {{-- <a href="/"><img src="img/logo.svg" alt="Image Logo"></a> --}}
        <a href="/"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239.48 129.77"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:5px;}</style></defs><title>logo</title><line class="cls-1" x1="2.5" y1="128.52" x2="2.5" y2="108.74"/><line class="cls-1" x1="15.19" y1="128.52" x2="15.19" y2="33.57"/><line class="cls-1" x1="69.76" y1="128.52" x2="15.19" y2="33.57"/><line class="cls-1" x1="130.09" y1="1.59" x2="69.76" y2="128.52"/><line class="cls-1" x1="38.93" y1="47.42" x2="67.05" y2="98.13"/><line class="cls-1" x1="108.33" y1="17.75" x2="67.05" y2="98.13"/><line class="cls-1" x1="131.33" y1="46.43" x2="131.33" y2="128.52"/><line class="cls-1" x1="137.75" y1="2.17" x2="186.96" y2="128.52"/><line class="cls-1" x1="237.16" y1="0.93" x2="186.36" y2="126.99"/><line class="cls-1" x1="173.86" y1="65.35" x2="185.23" y2="93.66"/><line class="cls-1" x1="210.2" y1="29.86" x2="185.23" y2="93.66"/></svg>
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>

        <?php
            if (!(Auth::check())) {
        ?>
    <div class="dropdown">
        <div onclick="dropdown()" class="burgerAnim"></div>
    
        <div class="login" id="myDropdown">
            <a class="log" href="/login">Log In</a>
            <div class="dezoom">
                <a class="reg" href="/register">Sign-up</a>
            </div>
        </div>
    </div>
</div>

        <?php
            }
            else{
                ?>
            <div class="connected">
                <p><a href="/logout">Disconnect</a></p><br>
                <p>Bonjour <span class="name_connected"><?php echo(Auth::user()->forename);?></span></p>
            </div>
        </div>
                <?php
            }
        ?>



