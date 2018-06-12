<!DOCTYPE html>
<html lang="ro-RO">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Scholarly HTML — WeBall</title>
    <link rel="stylesheet" href="styles/scholarly.css">
</head>
<body>
<header>
    <h1>Scholarly HTML - Web Technologies App</h1>
</header>
<article id="what" typeof="schema:ScholarlyArticle" resource="#">
    <section id="introducere">
        <h3>Introducere</h3>
        <p>Studentul va puta afla care este rata de a promova materia "Tehnologii Web" iar profesorul are datoria de a
            introduce note,prezente,bonusuri studentului</p>
    </section>

    <section id="descriere">
        <h3>Descriere proiect Web Technologies App</h3>
        <p>Fiecare student va putea afla, in mod estimativ, daca va promova sau nu materia "Tehnologii Web". De
            asemenea, sistemul ii va oferi sugestii pentru a-si imbunatati performanta. Se vor pune la dispozitie doua
            tipuri de conturi: profesori si studenti. Profesorii au datoria de a consemna intreaga activitate a fiecarui
            student: prezente, interventii interesante, punctaje etc. (inclusiv date preluate dintr-un fisier CSV).
            Fiecare student, in functie de cele introduse de profesori si de statistica generala, va avea un profil
            personal de promovabilitate (de exemplu, daca a acumulat 8 prezente si cel mai bun din an are 10, atunci va
            avea 80% sanse de promovare). Aceasta statistica se va combina cu una proprie, ajustabila, bazata pe
            profilul persoanei in cadrul unor aplicatii Web sociale oferind API-uri de interes -- exemple: pentru
            Github, via GraphQL, se poate determina cate operatii de tip commit a efectuat persoana in ultima saptamana;
            pentru Facebook: numarul de participari la evenimente vizand tehnologiile Web etc. Va rezulta astfel un scor
            final public si un pronostic "DA/NU" de promovabilitate a materiei. Daca rezultatul este "NU", atunci se vor
            recomanda resurse de studiu in functie de saptamana curenta a semestrului scolar. Informatiile vor putea fi
            partajate pe diverse retele sociale, fiind disponibile in formatele HTML, CSV si XML. Functionalitatile vor
            fi expuse si de un API respectand paradigma REST.</p>
    </section>

    <section id="obiective">
        <h3>Obiective</h3>
        <p>Site-ul nostru urmareste activitatea studentilor si ofera acestora o interfata intuitiva si placuta pentru a
            afla metode de a promova materia "Tehnologii Web". Profesor va putea vedea lista studentilor, rezultatele
            studentilor , putand manipula aceste date ca rol de administrator asupra lor.
        </p>
        <p>Studenti pe de alta parte isi pot vedea rezultatul pe care il au in prezent printr-un algoritm care ii va
            arata care este procentul lui de a promova aceasta materie.</p>
    </section>

    <section id="metode">
        <h3>Metode folosite</h3>
        <p>Pentru a putea detalia tehnologiile folosite in cadrul aplicatiei este necesara reamintirea unor notiuni
            teoretice utilizare in dezvoltarea site-ului.
        </p>
        <p>Interfata a fost construita folosind HTML5 si stilizata folosind CSS3. HTML5 este un limbaj pentru
            structurarea ?i prezentarea con?inutului pentru World Wide Web, o tehnologie nucleu pentru Internet, iar CSS
            reprezinta acronimul pentru Cascading Style Sheets. CSS este un limbaj (style language) care defineste
            "layout-ul" pentru documentele HTML. CSS acopera culori, font-uri, margini, linii, imagini de fundal,
            pozitii avansate si multe alte optiuni utile in design.</p>
        <p>Pe de alta parte, PHP (acronimul recursiv pentru PHP: Hypertext Preprocessor) este un limbaj de scripting de
            uz general, cu cod-sursa deschis (open source), utilizat pe scara larga, ?i care este potrivit în special
            pentru dezvoltarea aplica?iilor web ?i poate fi integrat cu u?urin?a în HTML.</p>
        <p>Am folosit REST Api-ul de la Github pentru a putea sa luam toate commiturile pe care un student le-a facut intr-o
        anumita perioada de timp aratand cat de muncitor a fost studentul intr-o anumita perioada de timp.</p>
        <p>Am folosit REST Api-ul de la StackExchange pentru a putea sa luam toate intrebarile pe care un student le-a pus pe
        site-ul StackOverflow deoarece aceasta arata ca este muncitor si ca doreste sa invete cat mai mult.</p>
        <p>Partea de baze de date a fost asigurata utilizând MySQL. Am ales aceasta abordare deoarece este o baza de
            date rela?ionala u?or de conceput ?i utilizat.</p>
    </section>

    <section id="utilizare">
        <h3>Mod de utilizare</h3>
        <p>Interfa?a de login a unui utilizator necesita 2 campuri, un email si parola aferenta acestuia.</p>
        <ul>
            <li>
                Email: Utilizatorul va introduce email-ul sau unic creat la logare.
            </li>
            <li>
                Password: Parola aferenta email-ului introdus.
            </li>
        </ul>
        <p>În cazul în care utilizatorul isi uita parola acesta va fi redirectionat spre o noua pagina unde i se va
            oferi aceasta posibilitate.</p>
        <p>Dupa ce utilizatorul s-a logat, acesta va avea urmatoarele optiuni:</p>
        <p>Utilizatorul cu rol de profesor va avea urmatoarele optiuni:</p>
        <ul>
            <li>Sa vada notele unui student stiindu-i numele,prenumele,grupa</li>
            <li>Sa vada prezentele unui student stiindu-i numele,prenumele,grupa</li>
            <li>Sa vada bonusurile unui student stiindu-i numele,prenumele,grupa</li>
            <li>Sa acorde o nota unui student stiindu-i numele,prenumele,grupa</li>
            <li>Sa acorde o prezente unui student stiindu-i numele,prenumele,grupa</li>
            <li>Sa acorde o bonusuri unui student stiindu-i numele,prenumele,grupa</li>
            <li>Sa se delogheze</li>
            <li>Sa poata vedea pagina About in care va vedea creatorii acestui site</li>
            <li>Sa trimita un mail pe pagina de Contact in cazul in care exista o problema la site</li>
        </ul>
        <p>Utilizatorul cu rol de student va avea urmatoarele optiuni:</p>
        <ul>
            <li>Sa se delogheze</li>
            <li>Sa poata vedea pagina About in care va vedea creatorii acestui site</li>
            <li>Sa trimita un mail pe pagina de Contact in cazul in care exista o problema la site</li>
            <li>Sa isi introduca numele de GitHub pentru a i se adauga un punctaj bonus asupra punctajului final</li>
            <li>Sa isi introduca id-ul de StackOverFlow pentru a i se adauga un punctaj bonus asupra punctajului final</li>
            <li>Sa isi vada gradul de promovabilitate pe care il are in prezent pentru a trece materia</li>
            <li>Sa vada anumite sugesti care ii sunt puse in functie de gradul de promovabilitate pe care il are</li>
        </ul>
        <p>Formula pentru a afla gradul de promovabilitate este:</p>
        <ul>
            <lu>(Media notelor * 0.7) +</lu>
            <lu>((Numarul de commituri in ultimele 2 saptamani * 0.4) * 0.1) +</lu>
            <lu>((Numarul de intrebari puse pe StackOverflow * 0.4) * 0.1) +</lu>
            <lu>(Numarul de prezente ale studentului) * 0.1</lu>
        </ul>
    </section>

    <section id="bibliografie">
        <h3>Bibliografie</h3>
        <table>
            <thead>
            <tr>
                <th>Denumire</th>
                <th>URL</th>
            </tr>
            </thead>
            <tr>
                <td>E-learn</td>
                <td>http://www.e-learn.ro/tutorial/css/ce-este-css-a/67/1/37.htm</td>
            </tr>
            <tr>
                <td>Wikipedia</td>
                <td>https://ro.wikipedia.org/wiki/HTML5</td>
            </tr>
            <tr>
                <td>Scholarly</td>
                <td>http://scholarly.vernacular.io/</td>
            </tr>
            <tr>
                <td>PHP manual</td>
                <td>http://php.net/manual/ro/intro-whatis.php</td>
            </tr>
            <tr>
                <td>GitHub API</td>
                <td>https://developer.github.com/</td>
            </tr>
            <tr>
                <td>StackExchange API</td>
                <td>https://api.stackexchange.com/docs</td>
            </tr>
        </table>
    </section>

</article>
<footer>
    <p>
        TW 2017
        •
        <a href="https://github.com/TheodoraVarvaroi/TW2017WeBall/">Github Repository</a>
        •
        UAIC - Facultatea de Informatica Iasi
    </p>
</footer>
</body>
</html>