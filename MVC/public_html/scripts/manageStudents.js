/**
 * Created by bgaid on 5/23/2018.
 */

/* Functionality for bottom buttons */

let buttonAddGrade = document.getElementById("grade");
let buttonAddPresence = document.getElementById("presence");
let buttonAddBonus = document.getElementById("bonus");

setAllInvisible();

function setAllInvisible() {
    document.getElementsByClassName("add__grade__container")[0].style.display = "none";
    document.getElementsByClassName("add__presence__container")[0].style.display = "none";
    document.getElementsByClassName("add__bonus__container")[0].style.display = "none";
}

buttonAddGrade.addEventListener("click", function () {
    if (document.getElementsByClassName("add__grade__container")[0].style.display === "none") {
        setAllInvisible();
        document.getElementsByClassName("add__grade__container")[0].style.display = "block";
    }
    else {
        setAllInvisible();
        buttonAddGrade.blur();
    }
});

buttonAddPresence.addEventListener("click", function () {
    if (document.getElementsByClassName("add__presence__container")[0].style.display === "none") {
        setAllInvisible();
        document.getElementsByClassName("add__presence__container")[0].style.display = "block";
    }
    else {
        setAllInvisible();
        buttonAddPresence.blur();
    }
});

buttonAddBonus.addEventListener("click", function () {
    if (document.getElementsByClassName("add__bonus__container")[0].style.display === "none") {
        setAllInvisible();
        document.getElementsByClassName("add__bonus__container")[0].style.display = "block";
    }
    else {
        setAllInvisible();
        buttonAddBonus.blur();
    }
});

/* Calls to server, dynamic generation of items etc. */

function getStudent() {

}


function getPrezente() {
    let returnval;
    let NumeInput = document.getElementById("NumeInput").value;
    let PrenumeInput = document.getElementById("PrenumeInput").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            returnval = xmlhttp.responseText;
            returnval = JSON.parse(returnval);
            console.log(returnval);
            let i;
            for (i = 0; i < returnval.length; i++) {

                /*
                let valoare = "presence_date_" + i.toString();
                let changeValue = document.getElementById(valoare);
                changeValue.textContent = returnval[i].toString();
                valoare = "presence_value_" + i.toString();
                changeValue = document.getElementById(valoare);
                changeValue.textContent = "Prezent";
                */

                let gradeText = document.createElement("p");
                gradeText.className = "grade__date";
                gradeText.textContent = returnval[i].grade;

                let dateText = document.createElement("p");
                dateText.className = "grade__date";
                dateText.textContent = returnval[i].date;

                let valueAndDateContainer = document.createElement("div");
                valueAndDateContainer.className = "value__and__date__container";
                valueAndDateContainer.appendChild(gradeText);
                valueAndDateContainer.appendChild(dateText);

                let listItem = document.createElement("li");
                listItem.className = "grade__item";
                listItem.appendChild(valueAndDateContainer);

                document.getElementsByClassName("grades__list")[0].appendChild(listItem);

            }
        }
    };

    xmlhttp.open("POST", "/ProjectWeb/MVC/public_html/manageStudents/getPrezente", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeInput=" + NumeInput + "&PrenumeInput=" + PrenumeInput);

}

function getGrades() {

    var returnval;
    let NumeInput = document.getElementById("NumeInput").value;
    let PrenumeInput = document.getElementById("PrenumeInput").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            returnval = xmlhttp.responseText;
            returnval = JSON.parse(returnval);
            console.log(returnval);
            var i;
            var contor =1;
            for (i = 1; i < returnval.length;i=i+2) {
                 console.log(returnval[i]);
                console.log(returnval[i-1]);
                 var valoare = "grade_date_" + contor.toString();
                 let changeValue = document.getElementById(valoare);
                 changeValue.textContent = returnval[i].toString();
                 valoare = "grade_value_" + contor.toString();
                 changeValue = document.getElementById(valoare);
                 changeValue.textContent = returnval[i-1].toString();
                 contor = contor +1;

            }
        }
    };

    xmlhttp.open("POST", "/ProjectWeb/MVC/public_html/manageStudents/getGrades", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeInput=" + NumeInput + "&PrenumeInput=" + PrenumeInput);

}

function getInterventions() {
    var returnval;
    let NumeInput = document.getElementById("NumeInput").value;
    let PrenumeInput = document.getElementById("PrenumeInput").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            returnval = xmlhttp.responseText;
            returnval = JSON.parse(returnval);
            console.log(returnval);
            var i;
            for (i = 1; i <= returnval.length; i++) {
                var valoare = "bonus_date_" + i.toString();
                let changeValue = document.getElementById(valoare);
                changeValue.textContent = " ";
                valoare = "bonus_value_" + i.toString();
                changeValue = document.getElementById(valoare);
                changeValue.textContent = returnval[i-1].toString();

            }
        }
    };

    xmlhttp.open("POST", "/ProjectWeb/MVC/public_html/manageStudents/getInterventions", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeInput=" + NumeInput + "&PrenumeInput=" + PrenumeInput);

}

function insertGrades(nota)
{

    let NumeInput = document.getElementById("NumeInput").value;
    let PrenumeInput = document.getElementById("PrenumeInput").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "/ProjectWeb/MVC/public_html/manageStudents/insertGrades", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeInput=" + NumeInput + "&PrenumeInput=" + PrenumeInput + "&nota=" +nota);
}

function insertIntervention(interventie)
{

    let NumeInput = document.getElementById("NumeInput").value;
    let PrenumeInput = document.getElementById("PrenumeInput").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "/ProjectWeb/MVC/public_html/manageStudents/insertIntervention", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeInput=" + NumeInput + "&PrenumeInput=" + PrenumeInput + "&Interventie=" +interventie);
}

function insertPresence(ziua,luna,anul)
{

    let NumeInput = document.getElementById("NumeInput").value;
    let PrenumeInput = document.getElementById("PrenumeInput").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "/ProjectWeb/MVC/public_html/manageStudents/insertPresence", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeInput=" + NumeInput + "&PrenumeInput=" + PrenumeInput + "&ziua=" +ziua + "&luna=" +luna + "&anul=" +anul);
}


let insertPresences = document.getElementById("buttonPresence");
insertPresences.addEventListener("click", function () {
    insertPresence(document.getElementById("ziua").value,document.getElementById("luna").value,document.getElementById("anul").value);
});

let searchButton = document.getElementById("searchButton");
searchButton.addEventListener("click", function () {
    getPrezente();
    getGrades();
    getInterventions();
});

let insertInterventie = document.getElementById("bonusButton");
insertInterventie.addEventListener("click", function () {
    insertIntervention(document.getElementById("bonus_description").value);
});
let insertGrade1 = document.getElementById("grade_1");
insertGrade1.addEventListener("click", function () {
    insertGrades(1);
});

let insertGrade2 = document.getElementById("grade_2");
insertGrade2.addEventListener("click", function () {
    insertGrades(2);
});

let insertGrade3 = document.getElementById("grade_3");
insertGrade3.addEventListener("click", function () {
    insertGrades(3);
});

let insertGrade4 = document.getElementById("grade_4");
insertGrade4.addEventListener("click", function () {
    insertGrades(4);
});

let insertGrade5 = document.getElementById("grade_5");
insertGrade5.addEventListener("click", function () {
    insertGrades(5);
});

let insertGrade6 = document.getElementById("grade_6");
insertGrade6.addEventListener("click", function () {
    insertGrades(6);
});

let insertGrade7 = document.getElementById("grade_7");
insertGrade7.addEventListener("click", function () {
    insertGrades(7);
});

let insertGrade8 = document.getElementById("grade_8");
insertGrade8.addEventListener("click", function () {
    insertGrades(8);
});

let insertGrade9 = document.getElementById("grade_9");
insertGrade9.addEventListener("click", function () {
    insertGrades(9);
});

let insertGrade10 = document.getElementById("grade_10");
insertGrade10.addEventListener("click", function () {
    insertGrades(10);
});

/*  Bonus buttons  */
let buttonShowBonus = document.getElementsByClassName("button__show__bonus");
let bonusDropdownContainer = document.getElementsByClassName("bonus__dropdown__container");

function showBonus(i) {
    if (bonusDropdownContainer[i].style.display === "none") {
        bonusDropdownContainer[i].style.display = "block";
    }
    else {
        bonusDropdownContainer[i].style.display = "none";
        buttonShowBonus[i].blur();
    }
}

for (let i = 0; i < buttonShowBonus.length; i++) {
    bonusDropdownContainer[i].style.display="none";
    buttonShowBonus[i].addEventListener("click", function () {
        showBonus(i);
    });
}
/*

//Cod pentru adaugat buton

let buttonExperimental = document.createElement("button");
buttonExperimental.className = "button__show__bonus";
buttonExperimental.append("EXPERIMENT");
document.body.appendChild(buttonExperimental);
*/


