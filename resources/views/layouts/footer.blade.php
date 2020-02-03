{{-- <footer>
    <p>hello</p>
</footer> --}}
{{-- <script>
    // Close the dropdown menu if the user clicks outside of it
    
</script> --}}

<script src="js/lottie.js" type="text/javascript"></script>
<script>
//Play an animation back on second click
    let iconMenu = document.querySelector('.burgerAnim');

    let animationMenu = bodymovin.loadAnimation({
            container: iconMenu,
            renderer: 'svg',
            loop: false,
            autoplay: false,
            path: "svg/data.json"
    });

    var directionMenu = 1;
    iconMenu.addEventListener('click', (e) => {
        animationMenu.setDirection(directionMenu);
        animationMenu.play();
        directionMenu = -directionMenu;
        console.log(document.getElementById("myDropdown").classList);  
    });

    function dropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
        
</script>