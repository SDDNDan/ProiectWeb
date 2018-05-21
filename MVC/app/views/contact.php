<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>
<body onload="initMap()" class = "bodyContent">
<header>
    <h1 class="index__title">Web Technologies App</h1>
    <button type="button" class="button__login"> Log In</button>
    <div class="content">
        <ul class="link__header_prop">
            <li class="link__header"><a class="list__link" href="index.php">Home</a></li>
            <li class="link__header"><a class="list__link" href="courses.php">Courses</a></li>
            <li class="link__header"><a class="list__link" href="GradeStatistics.php">Grade & Statistics</a>
            </li>
            <li class="link__header"><a class="list__link" href="about.phplic_html/index.php">About</a></li>
            <li class="link__header"><a class="list__link" href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class = "dropdown">
        <button class="dropdown__button">
        </button>
        <div class="dropdown__content">
            <a href="index.php" class="dropdown__link">Home</a>
            <a href="courses.php" class="dropdown__link">Courses</a>
            <a href="GradeStatistics.php" class="dropdown__link">Grades & Statistics</a>
            <a href="about.phplic_html/index.php" class="dropdown__link">About </a>
            <a href="contact.php" class="dropdown__link">Contact </a>
        </div>
    </div>
</header>



<section class="contact__page p-top-60">
    <div class="contact_title">CONTACT US</div>
    <div>
        <div class= "contact__map" style="">
            <script type="text/javascript"
                    src="http://www.webestools.com/google_map_gen.js?lati=47.173972&long=27.574911             .6770&zoom=18&width=675&height=400&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle="></script>
            <br/>
            <a href="http://www.webestools.com/google-maps-code-generator-insert-map-on-website-javascript-free-google-map-script.html"></a>
        </div>
        <div class = "formAndParagraph" >
            <p class="contact__paragraph">Facultatea de Informatica, Universitatea "Al. I. Cuza", General Berthelot, 16, IASI 700483, ROMANIA</p>
            <form class="" action="https://www.w3schools.com/html/" target="_blank" method="GET">
                <br>
                <input class="contact_textstyleSend" type="text" placeholder="Name *">
                <br>
                <br>
                <input class="contact_textstyleSend contact__inputposition1" type="text" placeholder="Email *">
                <br>
                <br>
                <input class="contact_textstyleSend contact__inputposition2" type="text" placeholder="Subject">
                <br>
                <br>
                <textarea class="contact_textstyleSend contact__inputposition3" name="message" placeholder="Message"></textarea>
                <br>
                <br>
                <input class="contact__inputposition4 contact_textstyleSendbutton" type="submit" value="Send">
            </form>
        </div>
    </div>
</section>


</body>
</html>
