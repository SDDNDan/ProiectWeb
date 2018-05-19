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
        <ul class="link__header_prop">
            <li class = "link__header"><a class = "list__link" href="index.php">Home</a> </li>
            <li class = "link__header"><a class = "list__link" href="courses.php">Courses</a></li>
            <li class = "link__header"><a class = "list__link" href="GradeStatistics.php">Grade & Statistics</a></li>
            <li class = "link__header"><a class = "list__link" href="about.php">About</a></li>
            <li class = "link__header"><a class = "list__link" href="contact.php">Contact</a></li>
        </ul>
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

<section class="section__manage__student">
    <div class="student__name__container">
        <h1 class="name">
            Numele studentului si grupa
        </h1>
    </div>
    <div class="grades__container">
        <ul class="grades__list">
            <li class="grade__item">
                <p class="grade__value">7</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">7</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">7</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">7</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
        </ul>
    </div>

    <div class="presence__container grades__container">
        <ul class="grades__list">
            <li class="grade__item">
                <p class="grade__value">prezent/absent</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">prezent/absent</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">prezent/absent</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">prezent/absent</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
        </ul>
    </div>

    <div class="bonus__container grades__container">
        <ul class="grades__list">
            <li class="grade__item">
                <p class="grade__value">Link catre detalii pentru interventie, poate chair un drop down.</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">Link catre detalii pentru interventie, poate chair un drop down.</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">Link catre detalii pentru interventie, poate chair un drop down.</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
            <li class="grade__item">
                <p class="grade__value">Link catre detalii pentru interventie, poate chair un drop down.</p>
                <p class="grade__date">15 - 05 - 2018</p>
            </li>
        </ul>
    </div>

    <div class="add__grade__container">
        un camp si un buton pentru adaugat nota
    </div>

    <div class="add__presence__container">
        un camp si un buton pentru adaugat prezente/absente
    </div>

    <div class="add__bonus__container">
        un camp si un buton pentru adaugat interventii la ora
    </div>

</section>

</body>
</html>
