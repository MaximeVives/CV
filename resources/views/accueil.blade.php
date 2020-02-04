@extends ('layouts\l_main_page')

@section('pageName')
    Neumorphism - ACCUEIL
@endsection

@section ('currentPage_css')
<link rel="stylesheet" href="css/accueil.css">
@endsection


@section ('main_content')
    <div class="description_me">
        <h1>Maxime</h1>
        <h4>Web Designer</h4>
        <article>I have been working on my passion for more than 5 years and today, 
            I am delighted to present you my own website. This is an application of my knowledge in 
            <div class="language"><span><i class="fab fa-html5"></i></span> <span><i class="fab fa-css3-alt"></i></span>
             <span><i class="fab fa-js-square"></i></span> <span><i class="fab fa-php"></i></span> <span><i class="fab fa-laravel"></i></span></div> 
            This website is a link between my current knowledge and the next ones. 
            In this way, I designed this website as a portfolio and a shop of my various projects.
            <a href="/about"><button class="neu_btn">Read More</button></a>
        </article>
    </div>
    <aside>
    </aside>
    

@endsection