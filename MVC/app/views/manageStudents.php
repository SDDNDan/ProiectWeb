
<?php
session_start();
if(!(isset($_SESSION['auth'])) || $_SESSION['auth'] =! "profesor"){
    header("location: index");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <?php include VIEWS.'partials/base_url.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>
<body>

<header>
    <h1 class="index__title">Web Technologies App</h1>

    <div class="content">
        <?php require_once("partials/nav.php"); ?>
    </div>

    <div class = "dropdown">
        <button class="dropdown__button">
        </button>
        <div class="dropdown__content">
            <a href="login.php" class="dropdown__link">Home</a>
            <a href="courses.php" class="dropdown__link">Courses</a>
            <a href="GradeStatistics.php" class="dropdown__link">Grades & Statistics</a>
            <a href="about.php" class="dropdown__link">About </a>
            <a href="contact.php" class="dropdown__link">Contact </a>
        </div>
    </div>
</header>

<div class="search__container">
    <div class="search__line__container">
        <label class="search__label" for="searchInput" id="numeLabel">
            NUME:
        </label>
        <input type="search" class="search__field" placeholder="Nume" id="NumeInput">
    </div>
    <div class="search__line__container">
        <label class="search__label" for="searchInput" id="prenumeLabel">
             PRENUME:
        </label>
        <input type="search" class="search__field" placeholder="Prenume" id="PrenumeInput">
    </div>
    <button class="button__submit" id="searchButton">
        Search
    </button>
</div>

<section class="section__manage__student">
    <div class="student__name__container">
        <h1 class="name">
            Numele studentului si grupa
        </h1>
    </div>
    <div class="grades__container">
        <ul class="grades__list">

        </ul>
    </div>

    <div class="presence__container grades__container">
        <ul class="grades__list">
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_1"> </p>
                <p class="grade__date"   id = "presence_date_1"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_2"> </p>
                <p class="grade__date"   id = "presence_date_2"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_3"> </p>
                <p class="grade__date"   id = "presence_date_3"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_4"> </p>
                <p class="grade__date"   id = "presence_date_4"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_5"> </p>
                <p class="grade__date"   id = "presence_date_5"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_6"> </p>
                <p class="grade__date"   id = "presence_date_6"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_7"> </p>
                <p class="grade__date"   id = "presence_date_7"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_8"> </p>
                <p class="grade__date"   id = "presence_date_8"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_9"> </p>
                <p class="grade__date"   id = "presence_date_9"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_10"> </p>
                <p class="grade__date"   id = "presence_date_10"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_11"> </p>
                <p class="grade__date"   id = "presence_date_11"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_12"> </p>
                <p class="grade__date"   id = "presence_date_12"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_13"> </p>
                <p class="grade__date"   id = "presence_date_13"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_14"> </p>
                <p class="grade__date"   id = "presence_date_14"> </p>
            </li>
            <li class="grade__item">
                <p class="grade__value"  id = "presence_value_15"> </p>
                <p class="grade__date"   id = "presence_date_15"> </p>
            </li>
        </ul>
    </div>

    <div class="bonus__container grades__container">
        <ul class="grades__list">
            <li class="grade__item">
                <div class="value__and__date__container">
                    <button class="button__show__bonus" id = "bonus_value_1">Show intervention</button>
                    <p class="grade__date" id = "bonus_date_1"> data</p>
                </div>
                <div class="bonus__dropdown__container">
                    <p class="bonus__text">
                        Studentul x a raspuns la curs. Mi-a placut de el.
                        A citit cursul in prealabil si a dedus Teorema lui Lagrange
                        din cap. 1 puncte bonus.
                        Reminder: il luam la MO-Ariel.
                    </p>
                </div>
            </li>
            <li class="grade__item">
                <div class="value__and__date__container">
                    <button class="button__show__bonus" id = "bonus_value_2">Show intervention</button>
                    <p class="grade__date" id = "bonus_date_2"> data</p>
                </div>
                <div class="bonus__dropdown__container">
                    <p class="bonus__text">
                        Studentul x a raspuns la curs. Mi-a placut de el.
                        A citit cursul in prealabil si a dedus Teorema lui Lagrange
                        din cap. 2 puncte bonus.
                        Reminder: il luam la MO-Ariel.
                    </p>
                </div>
            </li>
            <li class="grade__item">
                <div class="value__and__date__container">
                    <button class="button__show__bonus" id = "bonus_value_3">Show intervention</button>
                    <p class="grade__date" id = "bonus_date_3"> data</p>
                </div>
                <div class="bonus__dropdown__container">
                    <p class="bonus__text">
                        Studentul x a raspuns la curs. Mi-a placut de el.
                        A citit cursul in prealabil si a dedus Teorema lui Lagrange
                        din cap. 3 puncte bonus.
                        Reminder: il luam la MO-Ariel.
                    </p>
                </div>
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
                <li><button class="grade__dropdown__item" id="grade_1">1</button></li>
                <li><button class="grade__dropdown__item" id="grade_2">2</button></li>
                <li><button class="grade__dropdown__item" id="grade_3">3</button></li>
                <li><button class="grade__dropdown__item" id="grade_4">4</button></li>
                <li><button class="grade__dropdown__item" id="grade_5">5</button></li>
                <li><button class="grade__dropdown__item" id="grade_6">6</button></li>
                <li><button class="grade__dropdown__item" id="grade_7">7</button></li>
                <li><button class="grade__dropdown__item" id="grade_8">8</button></li>
                <li><button class="grade__dropdown__item" id="grade_9">9</button></li>
                <li><button class="grade__dropdown__item" id="grade_10">10</button></li>
            </ul>
        </div>
        <div class="add__presence__container">
            <div class="insert__container">
                <label class="insert__date__label">Day:</label>
                <input type="text" class="add__day" id ="ziua">
            </div>
            <div class="insert__container">
                <label class="insert__date__label">Month:</label>
                <input type="text" class="add__month"  id ="luna">
            </div>
            <div class="insert__container">
                <label class="insert__date__label">Year:</label>
                <input type="text" class="add__year"  id ="anul">
            </div>
            <button class="button__submit" id ="buttonPresence"">Add Presence</button>
        </div>
        <div class="add__bonus__container">
            <textarea class="bonus__description" id = "bonus_description"></textarea>
            <button class="button__submit" id="bonusButton">Submit Bonus</button>
        </div>
    </div>

</section>
<script src="scripts/manageStudents.js"></script>
</body>
</html>