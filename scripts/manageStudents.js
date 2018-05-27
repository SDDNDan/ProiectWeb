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