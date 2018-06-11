<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <?php include VIEWS.'partials/base_url.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/login_page.css"/>
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
                <a href="index.php" class="dropdown__link">Home</a>
                <a href="courses.php" class="dropdown__link">Courses</a>
                <a href="GradeStatistics.php" class="dropdown__link">Grades & Statistics</a>
                <a href="about.php" class="dropdown__link">About </a>
                <a href="contact.php" class="dropdown__link">Contact </a>
            </div>
        </div>
    </header>

<section class="about__page">
    <h1 class="about__title  ">ABOUT US</h1>

</section>

<div class = "aboutPlayers">
    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName"> Slusariuc Dan<br><br><br></h1>
        </div>
        <div class = "playerJob">M-am ocupat partea de BackEnd</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName">Gaidur Bogdan<br><br><br> </h1>
        </div>
        <div class = "playerJob">M-am ocupat cu partea de FrontEnd</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName">Timofte Stefan<br><br><br></h1>
        </div>
        <div class = "playerJob">M-am ocupat cu partea de FrontEnd</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
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
