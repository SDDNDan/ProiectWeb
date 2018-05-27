/**
 * Created by bgaid on 5/23/2018.
 */

function sendLoginData() {
    let mockReq = new XMLHttpRequest();
    mockReq.open( 'POST', 'https://proiectTW/loginController');

    let payload = {
        "username": document.getElementById("username").valueOf(),
        "password": document.getElementById("password").valueOf()
    };

    mockReq.send(JSON.stringify(payload));
}

let loginButton = document.getElementById("login");
loginButton.addEventListener("click", function(){
    sendLoginData();
});

