<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>
<body>

    <header>
        <h1 class="index__title">Web Technologies App</h1>
        <button type = "button" class ="button__login"> Log In</button>
        <div class="content">
            <?php require_once("partials/nav.php"); ?>
        </div>
        <div class = "dropdown">
            <button class="dropdown__button">
            </button>
            <div class="dropdown__content">
                <a href="home.phpblic_html/index.php" class="dropdown__link">Home</a>
                <a href="courses.php" class="dropdown__link">Courses</a>
                <a href="GradeStatistics.php" class="dropdown__link">Grades & Statistics</a>
                <a href="about.php" class="dropdown__link">About </a>
                <a href="contact.php" class="dropdown__link">Contact </a>
            </div>
        </div>
    </header>

    <section>
        <ul>
            <li class="GradesStatistics__SquarePromovabilitate ">
                <span class="GradesStatistics__textStyle1">
                Am nevoie de o idee cum sa reprezentam gradul de promovabilitate dupa regula lor. gen sfera procente etc.
                </span>
            </li>
            <li class="GradesStatistics__SquareLinkStatistics ">
                <span class="GradesStatistics__textStyle2">
                Am nevoie de o idee cum sa reprezentam gradul de promovabilitate dupa regula lor. gen sfera procente etc.
                </span>
            </li>
        </ul>
    </section>

</body>
</html>
