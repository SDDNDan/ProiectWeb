

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['auth'] != "student") {
    echo "<script>window.location.href='/ProjectWeb/MVC/public_html/';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>

   <?php include VIEWS . 'partials/base_url.php' ?>

    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>
<body id="gradebody">

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '2106153756319051',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.0'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>



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

<div class="search__container">
    <form method="POST" class="form__container">
        <div class="search__line__container">
            <label class="search__label" for="searchInput" id="numeLabel">
                Numele Github
            </label>
            <input type="search" name="NumeGithub" class="search__field" placeholder="Nume" id="NumeGithub">
        </div>
        <div class="search__line__container">
            <label class="search__label" for="searchInput" id="prenumeLabel">
                ID StackOverflow
            </label>
            <input type="search" name="IdStack" class="search__field" placeholder="ID" id="IdStack">
        </div>
        <button class="button__submit" id="calculateButton">
            Calculeaza
        </button>
        <div class="search__line__container">
            <label class="search__label_loading" id="loadingLabel">
            </label>
        </div>

    </form>
</div>

<div class="share__buttons">

</div>

<div class="progress__circle__container">
    <div id="circle1"></div>
    <div id="shadowring"></div>
    <div id="circle2"></div>
    <canvas height="370" width="370" id="counter"></canvas>
</div>

<div class="suggestion__container">
    <h1 class="suggestion__title" id="suggestion"></h1>

</div>

<script src="scripts/GradeStatistics.js"></script>

</body>
</html>
