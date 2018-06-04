<!--
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['auth'] != "student") {
    echo "<script>window.location.href='/ProjectWeb/MVC/public_html/login';</script>";
}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <!--
    <?php include VIEWS . 'partials/base_url.php' ?>
    -->
    <link rel="stylesheet" type="text/css" href="../../public_html/styles/style.css"/>
</head>
<body>

<header>
    <h1 class="index__title">Web Technologies App</h1>
    <div class="content">
        <!--
        <?php require_once("partials/nav.php"); ?>
        -->
    </div>
    <div class="dropdown">
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

<section class="grades__and__statistics__section">
    <div class="progress__circle__container">
        <div id="circle1"></div>
        <div id="shadowring"></div>
        <div id="circle2"></div>
        <canvas height="200" width="200" id="counter"/>
    </div>
    <div class="input__container">
        <input type="text" class="progress__circle__input" placeholder="Baga aici ce vrei">
    </div>
</section>
<script src="../../public_html/scripts/GradeStatistics.js"></script>

</body>
</html>
