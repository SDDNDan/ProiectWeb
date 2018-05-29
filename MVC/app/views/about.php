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
        <button type="button" class="button__login"> Log In</button>
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
    <p class="about__subtitle" >I'm a paragraph. Click here to add your own text and edit me. It’s
        easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a
        great place for you to tell a story and let your users know a little more about you.</p>
</section>

<div class = "aboutPlayers">
    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName"> Player 1<br><br><br></h1>
        </div>
        <div class = "playerJob">Fiecare ce a avut de facut si ce a realizat din task-uri.</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName">Player 2 <br><br><br> </h1>
        </div>
        <div class = "playerJob">Fiecare ce a avut de facut si ce a realizat din task-uri.</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName">Player 3 <br><br><br></h1>
        </div>
        <div class = "playerJob">Fiecare ce a avut de facut si ce a realizat din task-uri.</div>
    </div>

    <div class = "player">
        <div class = "playerPicture">
            <img src="../../public_html/styles/Profile.jpg" class = "imgPlayer">
            <h1 class = "playerName">Player 4<br><br><br> </h1>
        </div>
        <div class = "playerJob">Fiecare ce a avut de facut si ce a realizat din task-uri.</div>
    </div>


    <footer>
        <h6>2018 Web Technologies Project proudly created by Gaidur Bogdan | Timofe Stefan | Slusariuc Dan Nicolae. </h6>
    </footer>


</div>


</body>
</html>
