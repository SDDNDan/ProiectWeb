<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Technologies App</title>
  <?php include VIEWS.'partials/base_url.php' ?>
    <link rel="stylesheet" type="text/css" href="styles/login_page.css"/>
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
        <h1 class="section__title" style = "padding-top : 10%; padding-bottom : 7%; ">Courses & Laboratories</h1>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web01ArhitecturaWeb.pdf'">Course 1</button>
                    <div class = courseName>Concepte si viziune primara</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='https://slides.com/iampava/tw#/'" >Lab #1</button>
                </div>
            </div>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web02ProgramareWeb-HTTP-CGI.pdf'">Course 2</button>
                    <div class = courseName>Programare Web</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='https://slides.com/iampava/tw#/13'">Lab #2</button>
                </div>
            </div>

            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web04DezvoltareaAplicatiilorWeb-InginerieWeb.pdf'">Course 3</button>
                    <div class = courseName>Ingineria Web</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='https://slides.com/iampava/tw#/25'">Lab #3</button>
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


            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web06ModelareXML-FamiliaXML.pdf">Course 6</button>
                    <div class = courseName>Familia XML</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick = "window.location.href = 'https://slides.com/iampava/tw#/47'">Lab #6</button>
                </div>
            </div>


            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web07ModelareXML-XPath-ValidariXML-DTD.pdf'">Course 7</button>
                    <div class = courseName>Familia XML II</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick = "window.location.href = 'https://slides.com/iampava/tw#/57'">Lab #7</button>
                </div>
            </div>


            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web08ProcesariXML-DOM.pdf'">Course 9</button>
                    <div class = courseName>Procesadea datelor XML - DOM </div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='https://slides.com/iampava/tw#/68'" >Lab #9</button>
                </div>
            </div>


             <div class = cursSiLaborator>
                 <div class = courseColoumn>
                     <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web09ProcesariXML-SAX-SimpleXML.pdf'">Course 10</button>
                     <div class = courseName>Prelucrarea simplificata a documentelor XML</div>
                 </div>
                 <div class = laboratorColoumn>
                     <button class = laboratorButton onclick="window.location.href='https://slides.com/iampava/tw#/80'" >Lab #10</button>
                 </div>
             </div>


            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web10ServiciiWeb-SOA-SOAP-WSDL-UDDI.pdf'">Course 11</button>
                    <div class = courseName>Servicii Web - De la SOA la SOAP</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='http://slides.com/iampava/tw#/'" >Lab #11</button>
                </div>
            </div>



            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web11ServiciiWeb-REST.pdf'">Course 12</button>
                    <div class = courseName>Paradigma REST</div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='http://slides.com/iampava/tw#/91'" >Lab #12</button>
                </div>
            </div>



            <div class = cursSiLaborator>
                <div class = courseColoumn>
                    <button class = courseButton onclick="window.location.href='https://profs.info.uaic.ro/~busaco/teach/courses/web/presentations/web12InteractiuneWeb-Ajax-Mashups.pdf'">Course 13</button>
                    <div class = courseName>Microservicii si interactiune Web </div>
                </div>
                <div class = laboratorColoumn>
                    <button class = laboratorButton onclick="window.location.href='http://slides.com/iampava/tw#/99'" >Lab #13</button>
                </div>
            </div>





        </div>
    </section>


</body>
</html>
