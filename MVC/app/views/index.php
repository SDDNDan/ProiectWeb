
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<html>
<head>
    <title>Web Technologies App</title>
    <?php include VIEWS.'partials/base_url.php' ?>


    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="indexbody">


    <header>
        <h1 class="index__title">Web Technologies App</h1>
        <div class="content">
           <!-- <?php require_once("partials/nav.php"); ?> -->
        </div>


        <div class = "dropdown">
            <button class="dropdown__button">
            </button>
            <div class="dropdown__content">
                <a href="index.php" class="dropdown__link" id="dropdown__first__link">Home</a>
                <a href="courses.php" class="dropdown__link">Courses</a>
                <a href="GradeStatistics.php" class="dropdown__link">Grades & Statistics</a>
                <a href="about.php" class="dropdown__link">About </a>
                <a href="contact.php" class="dropdown__link">Contact </a>
            </div>
        </div>
    </header>


    <section class = "section__about_first">
        <p class = "section__text" id = up_title>
            Developing your skills
        </p>
        <h1 class = "section__title" id = big_title>
            HTML - CSS - JS
        </h1>

<div class = "white__background">
<div class = "section__bibliography">
        <div class = "bibliography" id = "homeLeft">
            <p class = "abreviations">
                HTML
            </p>
            <p class = "definitii">
                HyperText Markup Language (HTML) este un limbaj de marcare utilizat pentru crearea paginilor web ce pot fi afișate într-un browser (sau navigator). Scopul HTML este mai degrabă prezentarea informațiilor – paragrafe, fonturi, tabele ș.a.m.d. – decât descrierea semanticii documentului.
            </p>
                <a href = "https://www.w3schools.com/html/" class = "readMore">
                    Read More
                </a>

        </div>

        <div class = "bibliography" id = "homeCenter">
            <p class = "abreviations">
                CSS
            </p>
            <p class = "definitii">
                CSS (Cascading Style Sheets) este un standard pentru formatarea elementelor unui document HTML. Stilurile se pot atașa elementelor HTML prin intermediul unor fișiere externe sau în cadrul documentului, prin elementul
            </p>
            <a href="https://www.w3schools.com/css/" class = "readMore">
                Read More
            </a>
        </div>

        <div class = "bibliography" id = "homeRight">
            <p class = "abreviations">
                JS
            </p>
            <p class = "definitii">
                JavaScript (JS) este un limbaj de programare orientat obiect bazat pe conceptul prototipurilor.[5] Este folosit mai ales pentru introducerea unor funcționalități în paginile web, codul JavaScript din aceste pagini fiind rulat de către browser.
            </p>
            <a href="https://www.w3schools.com/js/" class = "readMore">
                Read More
            </a>
         </div>

</div>
</div>

    </section>

    <section class="section__about">
        <h1 class="section__title" id="about_us">
            ABOUT US
        </h1>
        <p class="section__text">
         Fiecare student va putea afla, in mod estimativ, daca va promova sau nu materia "Tehnologii Web". De asemenea, sistemul ii va oferi sugestii pentru a-si imbunatati performanta. Se vor pune la dispozitie doua tipuri de conturi: profesori si studenti. Profesorii au datoria de a consemna intreaga activitate a fiecarui student: prezente, interventii interesante, punctaje etc. (inclusiv date preluate dintr-un fisier CSV). Fiecare student, in functie de cele introduse de profesori si de statistica generala, va avea un profil personal de promovabilitate (de exemplu, daca a acumulat 8 prezente si cel mai bun din an are 10, atunci va avea 80% sanse de promovare). Aceasta statistica se va combina cu una proprie, ajustabila, bazata pe profilul persoanei in cadrul unor aplicatii Web sociale oferind API-uri de interes -- exemple: pentru Github, via GraphQL, se poate determina cate operatii de tip commit a efectuat persoana in ultima saptamana; pentru Facebook: numarul de participari la evenimente vizand tehnologiile Web etc. Va rezulta astfel un scor final public si un pronostic "DA/NU" de promovabilitate a materiei. Daca rezultatul este "NU", atunci se vor recomanda resurse de studiu in functie de saptamana curenta a semestrului scolar. Informatiile vor putea fi partajate pe diverse retele sociale, fiind disponibile in formatele HTML, CSV si XML. Functionalitatile vor fi expuse si de un API respectand paradigma REST.
        </p>
        <div class="button__container">
            <a href="https://profs.info.uaic.ro/~busaco/teach/courses/web/projects/xml-transform.php?pag=projects" class="more">
                Read more
            </a>
        </div>

    </section>




<footer>
    <h6>2018 Web Technologies Project proudly created by Slusariuc Dan Dragos Nicolae | Gaidur Bogdan | Timofte Stefan. </h6>
</footer>

</body>
</html>
