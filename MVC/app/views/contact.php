<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <?php include VIEWS.'partials/base_url.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>

</head>
<body class = "bodyContent">
<header>
    <h1 class="index__title">Web Technologies App</h1>
    <div class="content">
        <?php require_once("partials/nav.php"); ?>
    </div>
    <div class = "dropdown">
        <button class="dropdown__button">
        </button>
        <div class="dropdown__content">
            <a class = "dropdown__link" href="index/logout">Logout</a>
            <a class = "dropdown__link" href="index">Home</a>
            <a class = "dropdown__link" href="courses">Courses</a>
            <a class = "dropdown__link" href="GradeStatistics">Grade & Statistics</a>
            <a class = "dropdown__link" href="about">About</a>
            <a class = "dropdown__link" href="contact">Contact</a>
            <a class = "dropdown__link" href="documentatie">DOC</a>
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
            <br/>
            <span id="msg" style="display:none;"></span>
                <br>
                <input class="contact_textstyleSend" type="text" placeholder="Name *" id="name" name="name">
                <br>
                <br>
                <input class="contact_textstyleSend contact__inputposition1" type="text" name="email" placeholder="Email *" id = "email">
                <br>
                <br>
                <input class="contact_textstyleSend contact__inputposition2" type="text" name="subject" placeholder="Subject" id = "subject">
                <br>
                <br>
                <textarea class="contact_textstyleSend contact__inputposition3" name="message" placeholder="Message" id = "message"></textarea>
                <br>
                <br>
                <button class="contact__inputposition4 contact_textstyleSendbutton" type="submit"  value="Send" id ="submit">Send</button>

        </div>
    </div>
</section>
<script src="scripts/sendMail.js"></script>
</body>
</html>
