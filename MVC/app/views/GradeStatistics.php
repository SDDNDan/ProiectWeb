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
<body>

<header>
    <h1 class="index__title">Web Technologies App</h1>
    <div class="content">

        <?php require_once("partials/nav.php"); ?>

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
<form method="POST" action="GradeStatistics/getGithubCommits" class="form__container">
    <div class="search__container">
        <div class="search__line__container">
            <label class="search__label" for="searchInput" id="numeLabel">
                Numele Github
            </label>
            <input type="search" name="NumeleGithub" class="search__field" placeholder="Nume" id="IdStack">
        </div>
        <div class="search__line__container">
            <label class="search__label" for="searchInput" id="prenumeLabel">
                ID StackOverflow
            </label>
            <input type="search" name="IdStack" class="search__field" placeholder="ID" id="NumeleGithub">
        </div>
        <button class="button__submit" id="calculateButton">
            Calculeaza
        </button>
    </div>
</form>
<div class="progress__circle__container">
    <div id="circle1"></div>
    <div id="shadowring"></div>
    <div id="circle2"></div>
    <canvas height="370" width="370" id="counter"></canvas>
</div>

<div class="suggestion__container">
    <h1 class="suggestion__title" id="suggestion"></h1>
    <div class="suggestion__content">
        <p class="suggestion__message">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.
        </p>
    </div>
</div>

<script src="scripts/GradeStatistics.js"></script>

</body>
</html>
