@extends ('layouts\l_main_page')

@section ('currentPage_css')
<link rel="stylesheet" href="css/accueil.css">
@endsection


@section ('main_content')
    <div class="description_me">
        <h1>Maxime</h1>
        <h4>Web Designer</h4>
        <article>I have been working on my passion for more than 5 years and today 
            I am happy to be able to offer you my own website.
            It is a practical application of most of my knowledge in HTML5/CSS3/JS/PHP/Laravel. 
            It thus serves as a bridge between my current knowledge and the knowledge I will get. 
            So I decided to create this site which will be a portfolio and a shop of my various projects.
            <button class="neu_btn">Read More</button>
        </article>
    </div>
    <aside>
        {{-- <img src="img/profil.jpg" alt="Picture of me"> --}}
    </aside>
    

@endsection