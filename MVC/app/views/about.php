<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <?php include VIEWS.'partials/base_url.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>
<body>
    <header >
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

<section class="about__page">
    <h1 class="about__title  ">ABOUT US</h1>

</section>

<div class = "aboutPlayers">
    <div class = "player">
        <div class = "playerPicture">
            <img src="styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName"> Slusariuc Dan<br><br><br></h1>
        </div>
        <div class = "playerJob">M-am ocupat partea de BackEnd</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="images/bogdan.png" class = "imgPlayer">
            <h1 class = "playerName">Gaidur Bogdan<br><br><br> </h1>
        </div>
        <div class = "playerJob">M-am ocupat cu partea de FrontEnd</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="images/stefan.png" class = "imgPlayer">
            <h1 class = "playerName">Timofte Stefan<br><br><br></h1>
        </div>
        <div class = "playerJob">M-am ocupat cu partea de FrontEnd</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="images/pava.jpg" class = "imgPlayer">
            <h1 class = "playerName">Pavaloi Alexandru<br><br><br> </h1>
        </div>
        <div class = "playerJob">Coordonator</div>
    </div>

    <footer>
        <h6>2018 Web Technologies Project proudly created by Gaidur Bogdan | Timofe Stefan | Slusariuc Dan Nicolae. </h6>
    </footer>


</div>


</body>
</html>
