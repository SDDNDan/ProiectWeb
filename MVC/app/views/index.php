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
            <?php require_once("partials/nav.php"); ?>
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



    </section>

    <section class="section__about">
        <h1 class="section__title" id="about_us">
            ABOUT US
        </h1>
        <p class="section__text">
            Aplicatia noastra are scopul de a ajuta studentii sa isi imbunatateasca
            performanta la materia Tehnologii Web, de a vedea care sunt sansele lor de
            a promova materia, si de a ajuta profesorii in consemnarea activitatii studentilor
            atat la seminar cat si la curs.
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
