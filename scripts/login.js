/**
 * Created by bgaid on 5/23/2018.
 */

function sendLoginData() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "http://localhost:8000/ProjectWeb/MVC/public_html/login/makeLogin", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("username=" + username + "&password=" + password);
}

let loginButton = document.getElementById("login");
loginButton.addEventListener("click", function(){
    sendLoginData();
});

