<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <link rel="stylesheet" type="text/css" href="../../styles/style.css"/>
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
            <a href="index.html" class="dropdown__link">Home</a>
            <a href="courses.html" class="dropdown__link">Courses</a>
            <a href="GradeStatistics.html" class="dropdown__link">Grades & Statistics</a>
            <a href="about.html" class="dropdown__link">About </a>
            <a href="contact.html" class="dropdown__link">Contact </a>
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

    <div class="add__data__container">
        <ul class="add__list">
            <li><button class="add__dropdown__icon" id="grade">Add Grade</button></li>
            <li><button class="add__dropdown__icon" id="presence">Add Presence</button></li>
            <li><button class="add__dropdown__icon" id="bonus">Add Bonus Activity</button></li>
        </ul>
    </div>
    <div class="add__content__container">
        <div class="add__grade__container">
            <ul class="grades__dropdown__list">
                <li class="grade__dropdown__item">1</li>
                <li class="grade__dropdown__item">2</li>
                <li class="grade__dropdown__item">3</li>
                <li class="grade__dropdown__item">4</li>
                <li class="grade__dropdown__item">5</li>
                <li class="grade__dropdown__item">6</li>
                <li class="grade__dropdown__item">7</li>
                <li class="grade__dropdown__item">8</li>
                <li class="grade__dropdown__item">9</li>
                <li class="grade__dropdown__item">10</li>
            </ul>
        </div>
        <div class="add__presence__container">
            <div class="insert__container">
                <label class="insert__date__label">Day:</label>
                <input type="text" class="add__day">
            </div>
            <div class="insert__container">
                <label class="insert__date__label">Month:</label>
                <input type="text" class="add__month">
            </div>
            <div class="insert__container">
                <label class="insert__date__label">Year:</label>
                <input type="text" class="add__year">
            </div>
            <button class="button__submit">Add Presence</button>
        </div>
        <div class="add__bonus__container">
            <textarea class="bonus__description"></textarea>
            <button class="button__submit" id="bonusButton">Submit Bonus</button>
        </div>
    </div>

</section>

<script type="text/javascript" src="../../scripts/manageStudents.js"></script>
</body>
</html>