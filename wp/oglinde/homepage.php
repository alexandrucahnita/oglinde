<?php
/*
Template Name: Homepage
*/
?>

<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<body class="homepage" onload="initialize()">
<?php include_once("analyticstracking.php") ?>
    <div class="grid"></div>
<div class="container">
<?php include("headerContent.php") ?>


    <div class="row-fluid border">
        <div class="span5">
            <p class="hero">Iti doresti un medic de familie care e intotdeauna pregatit sa iti raspunda cu atentie?
                Doresti sa iti faci programare repede si usor? Atat timpul tau cat si starea ta de bine sunt
                importante pentru mine. Ca asigurat si ca om, este dreptul tau sa beneficiezi de cele mai bune
                conditii alaturi de familia pe care o iubesti.</p>
            <a href="/mihaela-vicol/" class="btn">Afla mai multe</a>
        </div>
        <div class="span7 spacing">
            <!--<iframe src="http://player.vimeo.com/video/44332868" width="538" height="303" frameborder="0"
                     webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>-->
            <img src="/wp-content/uploads/home.jpg" />
        </div>
    </div>


    <div class="row-fluid border">
        <div class="span6 column">
            <div class="span12 portlet">
                <h2>Medicina de familie</h2>

                <p class="span8">Afla cu ce se ocupa si cu ce te poate ajuta medicul tau de familie!</p>
                <a href="/servicii/" class="btn">Afla mai multe</a>
            </div>
            <div class="span12 portlet">
                <h2>Eliberare documente </h2>

                <p class="span8">Afla care este lista de documente pe care le eliberez si cum sa faci ca sa le poti ridica in timp util!</p>
                <a href="/servicii/" class="btn">Afla mai multe</a>
            </div>
            <div class="span12 portlet">
                <h2>Copii</h2>

                <p class="span8">Relatia copilului cu medicul de familie incepe, in cele mai bune cazuri inca din burtica. Afla cum o poti crea!</p>
                <a href="/inscrieri/" class="btn">Afla mai multe</a>
            </div>
            <div class="span12 portlet">
                <h2>Seniori</h2>

                <p class="span8">Varsta a 3-a nu inseamna intotdeauna<br />
                    un sir indelungat de asteptari la medic si la farmacie. Descopera solutii linistitoare alaturi de medicul tau!</p>
                <a href="/inscrieri/" class="btn">Afla mai multe</a>
            </div>

        </div>
        <div class="span3 portlet yellow">
                <h2>Inscrie-te rapid</h2>
            <p>Programeaza-te si vino la cabinet cu cele trei acte necesare.</p>                <a href="/inscrieri/"
                                                                                    class="btn">Afla mai multe</a>
        </div>
        <div class="span3 portlet yellow">
            <h2>Programari</h2>
            <p>Asteapta-te sa nu astepti. Programarea online este rapida, simpla si sigura.</p>
            <a href="/programari/" class="btn">Afla mai multe</a>
        </div>
        <div class="span3 portlet yellow">
            <h2>La domiciliu</h2>
            <p>Afla ce si cum trebuie sa faci pentru a primi vizita medicului la domiciliu.</p>
            <a href="/servicii/" class="btn">Afla mai multe</a>
        </div>
        <div class="span3 portlet yellow">
            <h2>Medicina de familie</h2>
            <p>E minunat sa stii ca ai un medic de familie care iti sare intotdeuna in ajutor.</p>
            <a href="/servicii/" class="btn">Afla mai multe</a>
        </div>


    </div>

    <div class="row-fluid">
        <div class="span6 infohp">
           <h2>7 motive sa te inscrii</h2>
            <ul>
                <li>Dr. Mihaela Vicol este specialist in medicina de familie si sef lucrari in deontologie medicala si bioetica.</li>
                <li>Promovam dreptul pacientului la informare si oferim explicatii logice, de natura didactica, pe intelesul tuturor.</li>
                <li>Oferim serivicii pentru asigurati si servicii private pentru cei care nu au asigurare.</li>
                <li>Oferim orientare diagnostica eficienta.</li>
                <li>Am deschis cabinetul in cadrul clinicii Medicover pentru ca pacientii sa poata beneficia rapid de serviciile medicale adecvate.</li>
                <li>Avem o colaborare excelenta cu copiii si materiale informative speciale pentru ei.</li>
                <li>Efectuam programari online si respectam cu strictete orele de programare</li>
            </ul>
        </div>

       <div class="span6 portlet">
            <div id="map_canvas" style="width:460px; height:280px; margin-bottom:20px;"></div>
            <div>
                <a href="/contact/" class="btn">Contact</a>
            </div>
        </div>


    </div>
<?php get_footer(); ?>