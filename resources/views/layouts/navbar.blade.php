
<div class="navbar_grid">

    <div id="home_logo">
        <a href="/"><img src="img/logo.svg" alt="Image Logo"></a>
    </div>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>

    <div class="login">
        <?php
            if (!(Auth::check())) {
        ?>
            <a class="log" href="/login">Log In</a>
            <div class="dezoom"><a class="reg" href="/register">Sign-up</a></div>
        <?php
            }
            else{
                ?>
                <p><a href="/logout">Disconnect</a></p><br>
                <p>Bonjour <?php echo(Auth::user()->prenom);?></p>
                <!-- {{ $dataProduit->nom_produit }} ----! THIS IS THE METHOD TO TAKE DATAS--> 
            </div>
                <?php
            }
        ?>
    </div>
</div>


