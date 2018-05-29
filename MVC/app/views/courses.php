<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
    <link rel="stylesheet" type="text/css" href="../../../styles/style.css"/>
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
                <a href="index.php" class="dropdown__link">Home</a>
                <a href="courses.php" class="dropdown__link">Courses</a>
                <a href="GradeStatistics.phpndex.php" class="dropdown__link">Grades & Statistics</a>
                <a href="about.php" class="dropdown__link">About </a>
                <a href="contact.php" class="dropdown__link">Contact </a>
            </div>
        </div>
    </header>


    <section class="p-top-60">
        <div class="courses__page">
        <h1 class="section__title">Courses & Laboratories</h1>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web01ArhitecturaWeb.pdf'">Course 1</button>
                    <div class = courseName>Concepte si viziune primara</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='http://slides.com/iampava/tw#/'" >Lab #1</button>
                </div>
            </div>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web02ProgramareWeb-HTTP-CGI.pdf'">Course 2</button>
                    <div class = courseName>Programare Web</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='http://slides.com/iampava/tw#/13'">Lab #2</button>
                </div>
            </div>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web04DezvoltareaAplicatiilorWeb-InginerieWeb.pdf'">Course 3</button>
                    <div class = courseName>Ingineria Web</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='https://iampava.com/tw/'">Lab #3</button>
                </div>
            </div>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick = "window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web05DezvoltareaAplicatiilorWeb-PHP.pdf'">Course 4</button>
                    <div class = courseName>Dezvoltarea aplicatiilor web in PHP I</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href= 'https://slides.com/iampava/tw#/34'">Lab #4</button>
                </div>
            </div>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href= 'https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web05DezvoltareaAplicatiilorWeb-PHP.pdf'">Course 5</button>
                    <div class = courseName>Dezvoltarea aplicatiilor web in PHP II</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick = "window.location.href = 'https://iampava.com/tw/'">Lab #5</button>
                </div>
            </div>


        </div>
    </section>


</body>
</html>
