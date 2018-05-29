/**
 * Created by bgaid on 5/23/2018.
 */


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

function getStudent() {
    let NumeInput = document.getElementById("NumeInput").value;
    let PrenumeInput = document.getElementById("PrenumeInput").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "/public_html/manageStudents/getStudent", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeInput=" + NumeInput + "&PrenumeInput=" + PrenumeInput);
    console.log("readyParca");
    if(xmlhttp.status==200){
        console.log("ready");
    }
}

let searchButton = document.getElementById("searchButton");
searchButton.addEventListener("click", function(){
    getStudent();
});