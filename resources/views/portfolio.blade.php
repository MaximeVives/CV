@extends ('layouts\l_main_page')

@section('pageName')
    Neumorphism - PORTFOLIO
@endsection

@section ('currentPage_css')
<link rel="stylesheet" href="css/portfolio.css">
@endsection

@section ('main_content')
    <div class="profil" onclick="deroule('profil')">
        <h2>Profil</h2>
        <p>Je suis étudiant en 2ième année
            du cycle préparatoire à Cesi de
            Pau. J'ai passé un TOEIC blanc
            avec un score de 665. <br><br>
            Je suis agé de 19 ans, je possède
            le permis B ainsi qu'un véhicule
            personnel. <br><br>
            J'aime beaucoup la photgraphie
            ainsi que la retouche, l'univers
            des effets spéciaux et le web
            design.</p>
    </div>


    <div class="formation" onclick="deroule('formation')">
        <h2>Formation</h2>
        <ul>
            <li><span>2019-2020</span> : Cycle préparatoire deuxième année
                spécialité informatique, <span class="spec">CESI école d'ingénieurs, Pau</span></li><br>
                
            <li><span>2018-2019</span> : Cycle préparatoire première année
                spécialité informatique, <span class="spec">CESI école d'ingénieurs, Pau</span></li><br>
                
            <li><span>2018</span> : Baccalauréat Scientifique (option SVT)
                spécialisation ISN, mention assez bien,
                <span class="spec">Lycée Jacques Monod Lescar</span></li>
        </ul>
    </div>


    <div class="experience-profesionnelle" onclick="deroule('experience-profesionnelle')">
        <h2>Expérience Profesionnelle</h2>
        <ul>
            <li><span>2019</span> : Livreur UPS | <span class="spec">secteur Ogeu-les
                bains (30 points/jours) pour particuliers et entreprises</span></li><br>
            <li><span>2018</span> : Livreur UPS | <span class="spec">secteur Ogeu-les
                bains (30 points/jours) pour particuliers et entreprises</span></li><br>
        </ul>
    </div>


    <div class="experience" onclick="deroule('experience')">
        <h2>Expérience</h2>
        <ul>
            <li>Projet Site de E-Commerce (2019/2020 : 3 semaines)</li>
            <li class="decal">Mise en place d'un site web dynamique en HTML5 / CSS3 / JS / PHP</li><br>

            <li>Projet Carnofluxe (2018/2019 : 3 semaines)</li>
            <li class="decal">Mise en place de serveurs HTTP, DNS, DHCP</li><br>

            <li>Projet de LAN E-Sport (2018/2019 : 2 semaines)</li>
            <li class="decal">Mise en place d'un réseau local pour une compétition regroupant 500 joueurs sur 5 jeux.</li>
            <li class="decal">CCNA 1 obtenu à l'occasion de ce projet</li> <br>

            <li>Projet Boulder Dash (2018/2019 : 2 semaines)</li>
            <li class="decal">Création d'un jeu rétro en JAVA</li>
            <li class="decal">Intéraction JAVA/BDD</li> <br>

            <li>Projet Coeur de LED (2018/2019 : 2 semaines)</li>
            <li class="decal">Electronique sur ARDUINO, lecture du pouls avec une LED infrarouge et retranscription des battements avec un coeur rouge en LED</li>
            <li class="decal">Création d'un code en C pour la récupération du pouls et la retranscription sur le coeur de LED</li> <br>
        </ul>
        
    </div>

    <div class="languages" onclick="deroule('languages')">
        <h2>Languages</h2>
        <ul>
            <li>HTML : <span class="spec">85%</span></li>
            <li>CSS : <span class="spec">80%</span></li>
            <li>JS : <span class="spec">70%</span></li>
            <li>PHP : <span class="spec">60%</span></li>
            <li>C : <span class="spec">50%</span></li>
            <li>JAVA : <span class="spec">40%</span></li>
            <li>C++ : <span class="spec">30%</span></li>
        </ul>
    </div>


    <div class="loisir" onclick="deroule('loisir')">
        <h2>Loisir</h2>
        <ul>
            <li>Golf : <span class="spec">index 23.5</span></li>
            <li>Vélo : <span class="spec">VTT</span></li>
            <li>Jeux vidéos : <span class="spec">Apex Legends, LoL, CoD</span></li>
            <li>Photographie : <span class="spec">Photoshop CC 2018</span></li>
            <li>Vidéo : <span class="spec">After Effects CC 2018, Premiere Pro CC 2018</span></li>
        </ul>
    </div>

    <script>
        function deroule(nameClass) {
        //    console.log(document.querySelector("." + nameClass).childNodes[3].classList);

            var doc = document.querySelector("." + nameClass).childNodes[3];
            console.log(doc);

            if (doc.classList == "nHidden") {
                doc.addEventListener("animationend", function noDisp(){
                    doc.style.display = "none";
                    doc.classList.remove("hidden");
                    this.removeEventListener("animationend", noDisp, true);
                }, true);
            }
            else{
                doc.style.display = "inline-block";
                doc.classList.add("hidden");
            }
            doc.classList.toggle("nHidden");
            doc.classList.toggle("hidden");
           
        }
    </script>

@endsection